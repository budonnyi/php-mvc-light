<?php
//include error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//autoload files
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/autoload.php');

//starting router
$router = new Router(); 
$router -> Run();