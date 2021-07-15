<?php



//require_once '../components/Router.php';

/**
 * Общие настройки исключение вывода ошибок
 * int_set('display_errors',1);
 * error_reporting(E_All);
 * 
 */


//define('ROOT', dirname(__FILE__));

//require_once (ROOT . '\components\Router.php');
require_once '../config/config.php';   // Инициализация настроек
require_once('../components/Db.php');
require_once '../components/Router.php';



$router = new Router();
$router->run();
