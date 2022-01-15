<?php

ini_set('error_reporting', E_ALL);

use Framework\Core\Router;
use App\Controller\Mylogger;
use App\Controller\Sess;

require "../vendor/autoload.php";

Sess::init();
Mylogger::log();

$router = new Router();
$controller = new $router->route($router->controller, $router->action, $router->get);
$action = $router->action;
$controller->$action();
?>

