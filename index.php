<?php
include 'base/start.php';

use BaseClasses\DB\DataBaseExecute as DB;
$registry->set ('template', new Template($registry));
$registry->set ('router', new Router($registry));
try {
    $registry['router']->setPath(site_path . 'controllers');
}catch (Exception $e){
    echo $e->getMessage();
}

$registry['router']->delegate();

$registry->set ('db', new DB());
