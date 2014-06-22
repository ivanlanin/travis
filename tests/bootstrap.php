<?php
/**
 * Bootstrap
 */

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Hello\\', __DIR__ . '/Hello');

date_default_timezone_set('UTC');
