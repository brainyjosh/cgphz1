<?php
 namespace MailPoetVendor\Symfony\Component\Validator; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Validator\ValidatorInterface; final class Validation { public static function createValidator() { return self::createValidatorBuilder()->getValidator(); } public static function createValidatorBuilder() { return new \MailPoetVendor\Symfony\Component\Validator\ValidatorBuilder(); } private function __construct() { } } 