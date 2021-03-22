<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Constraints; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Constraint; use MailPoetVendor\Symfony\Component\Validator\Exception\ConstraintDefinitionException; abstract class Composite extends \MailPoetVendor\Symfony\Component\Validator\Constraint { public function __construct($options = null) { parent::__construct($options); $this->initializeNestedConstraints(); $compositeOption = $this->getCompositeOption(); $nestedConstraints = $this->{$compositeOption}; if (!\is_array($nestedConstraints)) { $nestedConstraints = [$nestedConstraints]; } foreach ($nestedConstraints as $constraint) { if (!$constraint instanceof \MailPoetVendor\Symfony\Component\Validator\Constraint) { if (\is_object($constraint)) { $constraint = \get_class($constraint); } throw new \MailPoetVendor\Symfony\Component\Validator\Exception\ConstraintDefinitionException(\sprintf('The value "%s" is not an instance of Constraint in constraint "%s".', $constraint, static::class)); } if ($constraint instanceof \MailPoetVendor\Symfony\Component\Validator\Constraints\Valid) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\ConstraintDefinitionException(\sprintf('The constraint Valid cannot be nested inside constraint "%s". You can only declare the Valid constraint directly on a field or method.', static::class)); } } if (!\property_exists($this, 'groups')) { $mergedGroups = []; foreach ($nestedConstraints as $constraint) { foreach ($constraint->groups as $group) { $mergedGroups[$group] = \true; } } $this->groups = \array_keys($mergedGroups) ?: [self::DEFAULT_GROUP]; $this->{$compositeOption} = $nestedConstraints; return; } foreach ($nestedConstraints as $constraint) { if (\property_exists($constraint, 'groups')) { $excessGroups = \array_diff($constraint->groups, $this->groups); if (\count($excessGroups) > 0) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\ConstraintDefinitionException(\sprintf('The group(s) "%s" passed to the constraint "%s" should also be passed to its containing constraint "%s".', \implode('", "', $excessGroups), \get_class($constraint), static::class)); } } else { $constraint->groups = $this->groups; } } $this->{$compositeOption} = $nestedConstraints; } public function addImplicitGroupName($group) { parent::addImplicitGroupName($group); $nestedConstraints = $this->{$this->getCompositeOption()}; foreach ($nestedConstraints as $constraint) { $constraint->addImplicitGroupName($group); } } protected abstract function getCompositeOption(); protected function initializeNestedConstraints() { } } 