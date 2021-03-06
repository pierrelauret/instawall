<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/DC3/InstawallBundle/utils/Instagram.class.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

/* $loader->add('NSM', __DIR__.'/../vendor/bundles'); */

return $loader;
