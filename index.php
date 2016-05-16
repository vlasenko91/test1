<?php

// Ошибки
ini_set('display_errors',1);
error_reporting(E_ALL);

// Подключение файлов

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Db.php');
require_once (ROOT.'/components/Autoload.php');

session_start();
// выхов роутера

$router = new Router();
$router->run();

