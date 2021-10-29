<?php

// Define App Directories
defined('ROOT') ?:  define('ROOT', dirname(dirname(__DIR__)));

defined('DS') ?:  define('DS', DIRECTORY_SEPARATOR);
defined('APP') ?:  define('APP', ROOT . DS . 'App');
defined('CORE') ?:  define('CORE', APP . DS . 'Core');
defined('CONT') ?:  define('CONT', APP . DS . 'Controllers');
defined('MODEL') ?:  define('MODEL', APP . DS . 'Models');
defined('VIEW') ?:  define('VIEW', APP . DS . 'Views');
defined('CONF') ?:  define('CONF', APP . DS . 'Configs');

defined('PUBLIC_DIR') ?:  define('PUBLIC_DIR', ROOT . DS . 'public');
defined('PUBLIC_DIR_CAKE_IMG') ?:  define('PUBLIC_DIR_CAKE_IMG', ROOT . DS . 'public' . DS . 'img' . DS . 'cakes');

// database constant
// $database = require(CONF . DS . 'database.php');

// defined('DB_HOSTNAME') ?:  define('DB_HOSTNAME', $database['db_hostname']);
// defined('DB_NAME') ?:  define('DB_NAME', $database['db_name']);
// defined('DB_USERNAME') ?:  define('DB_USERNAME', $database['db_username']);
// defined('DB_PASSWORD') ?:  define('DB_PASSWORD', $database['db_password']);

// // route constant
// $routes = require(CONF . DS . 'routes.php');
// defined('DEFAULT_CONTROLLER') ?: define('DEFAULT_CONTROLLER', $routes['default_controller']);
// defined('DEFAULT_ACTION') ?: define('DEFAULT_ACTION', $routes['default_action']);



// load require file
require_once(CORE . DS . "App.php");
require_once(CORE . DS . "Controller.php");
require_once(CORE . DS . "Database.php");

//navigation constant
defined('DOCUMENT_ROOT') ?:  define('DOCUMENT_ROOT', "http://" . $_SERVER['SERVER_NAME'] . ":81/BKShop");
defined('PUBLIC_URL') ?:  define('PUBLIC_URL', "http://" . $_SERVER['SERVER_NAME'] . ":81/BKShop" . '/public');
defined('IMAGES_CAKES_URL') ?:  define('IMAGES_CAKES_URL', PUBLIC_URL . '/img/cakes');
defined('IMAGES_URL') ?:  define('IMAGES_URL', PUBLIC_URL . '/img');
defined('ICONS_URL') ?:  define('ICONS_URL', PUBLIC_URL . '/img/icons');
defined('IMAGES_CATEGORY_URL') ?:  define('IMAGES_CATEGORY_URL', PUBLIC_URL . '/img/categories');

//admind sidebar constant
// $adminSidebar = require(CORE . DS . 'admin_sidebar.php');
// defined('ADMIN_SIDEBAR') ?: define('ADMIN_SIDEBAR', $adminSidebar);
