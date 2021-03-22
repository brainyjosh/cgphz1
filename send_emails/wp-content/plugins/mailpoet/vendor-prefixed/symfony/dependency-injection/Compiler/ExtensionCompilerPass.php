<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Compiler; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\ContainerBuilder; class ExtensionCompilerPass implements \MailPoetVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface { public function process(\MailPoetVendor\Symfony\Component\DependencyInjection\ContainerBuilder $container) { foreach ($container->getExtensions() as $extension) { if (!$extension instanceof \MailPoetVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface) { continue; } $extension->process($container); } } } 