<?php

// Загрузка классов «на лету»

function __autoload($class_name)
{

//    $filename = strtolower($class_name) . '.php';
    $filename = $class_name . '.php';
    $file = site_path . 'classes' . DIRSEP . str_replace('\\', '/',$filename);

    if (file_exists($file) == false) {
        die('Unable to load library: ' . $file);
        return false;
    }
    include($file);
}
error_reporting(E_ALL);

if (version_compare(phpversion(), '5.1.0', '<') == true) {
    die ('PHP5.1 Only');
}

// Константы:

define('DIRSEP', DIRECTORY_SEPARATOR);
define('DB_USER', 'cm07851_wemeet');
define('DB_PASSWORD', 'wemeetpass');
define('DB_HOST', 'localhost');
define('DB_NAME', 'cm07851_wemeet');
define('DB_VALIDATION', 'column_validation');
define('DB_VALID_TYPE', 'valid_type');
define('DB_INPUTS', 'inputs');
define('DB_FORMS', 'forms');
define('DB_INPUT_TYPES', 'input_types');
define('DB_INPUT_VALIDATION', 'input_validation');

//echo DIRECTORY_SEPARATOR;

// Узнаём путь до файлов сайта

$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;

define('site_path', $site_path);

$registry = new Registry;