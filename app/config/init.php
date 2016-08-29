<?php

// I quite sure there is a best way to do this...
define('ROOT', dirname(dirname(__DIR__)));

define('APP', ROOT . '/app/');
define('CORE', APP . 'core/');
define('CONFIG', APP . 'config/');
define('MODEL', APP . 'model/' );
define('VIEW', APP . 'view/');
define('CONTROLLER', APP . 'controller/');

define('ASSETS', ROOT . 'assets/');
define('CSS', ASSETS . 'css/');
define('JS', ASSETS . 'js');
define('IMAGES', ASSETS . 'images/');

define('VENDOR', ROOT . 'vendor/');

require_once CORE . 'App.php';

