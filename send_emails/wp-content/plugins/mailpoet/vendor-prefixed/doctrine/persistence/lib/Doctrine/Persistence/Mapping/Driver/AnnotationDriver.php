<?php
 namespace MailPoetVendor\Doctrine\Persistence\Mapping\Driver; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\Common\Annotations\Reader; use MailPoetVendor\Doctrine\Persistence\Mapping\MappingException; use FilesystemIterator; use RecursiveDirectoryIterator; use RecursiveIteratorIterator; use RecursiveRegexIterator; use ReflectionClass; use RegexIterator; use function array_merge; use function array_unique; use function get_class; use function get_declared_classes; use function in_array; use function is_dir; use function preg_match; use function preg_quote; use function realpath; use function str_replace; use function strpos; abstract class AnnotationDriver implements \MailPoetVendor\Doctrine\Persistence\Mapping\Driver\MappingDriver { protected $reader; protected $paths = []; protected $excludePaths = []; protected $fileExtension = '.php'; protected $classNames; protected $entityAnnotationClasses = []; public function __construct($reader, $paths = null) { $this->reader = $reader; if (!$paths) { return; } $this->addPaths((array) $paths); } public function addPaths(array $paths) { $this->paths = \array_unique(\array_merge($this->paths, $paths)); } public function getPaths() { return $this->paths; } public function addExcludePaths(array $paths) { $this->excludePaths = \array_unique(\array_merge($this->excludePaths, $paths)); } public function getExcludePaths() { return $this->excludePaths; } public function getReader() { return $this->reader; } public function getFileExtension() { return $this->fileExtension; } public function setFileExtension($fileExtension) { $this->fileExtension = $fileExtension; } public function isTransient($className) { $classAnnotations = $this->reader->getClassAnnotations(new \ReflectionClass($className)); foreach ($classAnnotations as $annot) { if (isset($this->entityAnnotationClasses[\get_class($annot)])) { return \false; } } return \true; } public function getAllClassNames() { if ($this->classNames !== null) { return $this->classNames; } if (!$this->paths) { throw \MailPoetVendor\Doctrine\Persistence\Mapping\MappingException::pathRequired(); } $classes = []; $includedFiles = []; foreach ($this->paths as $path) { if (!\is_dir($path)) { throw \MailPoetVendor\Doctrine\Persistence\Mapping\MappingException::fileMappingDriversRequireConfiguredDirectoryPath($path); } $iterator = new \RegexIterator(new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path, \FilesystemIterator::SKIP_DOTS), \RecursiveIteratorIterator::LEAVES_ONLY), '/^.+' . \preg_quote($this->fileExtension) . '$/i', \RecursiveRegexIterator::GET_MATCH); foreach ($iterator as $file) { $sourceFile = $file[0]; if (!\preg_match('(^phar:)i', $sourceFile)) { $sourceFile = \realpath($sourceFile); } foreach ($this->excludePaths as $excludePath) { $exclude = \str_replace('\\', '/', \realpath($excludePath)); $current = \str_replace('\\', '/', $sourceFile); if (\strpos($current, $exclude) !== \false) { continue 2; } } require_once $sourceFile; $includedFiles[] = $sourceFile; } } $declared = \get_declared_classes(); foreach ($declared as $className) { $rc = new \ReflectionClass($className); $sourceFile = $rc->getFileName(); if (!\in_array($sourceFile, $includedFiles) || $this->isTransient($className)) { continue; } $classes[] = $className; } $this->classNames = $classes; return $classes; } } 