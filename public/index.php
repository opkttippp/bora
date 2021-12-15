<?php

session_start();
ini_set('log_errors', true);
//ini_set('error_log', 'logs/php_errors.log');
ini_set('error_reporting', E_ALL);

//use app\core\View;
use Framework\Core\Router;
use App\Controller\Mylogger;

require "../vendor/autoload.php";

$logger = new Mylogger();
$logger->log();

try {
    $router = new Router($_SERVER['REQUEST_URI']);
    $router->run();

    $controller = $router->controller;
    $action = $router->action;
    $get = $router->get;

    $cont = new $router->cont($controller, $action, $get);
    $cont->$action();
} catch (Exception $error) {
    echo "Exception - $error";
}

//--------------------------------------------------------------

//if ($this->match()) {
//    $path = 'app\controller\\' . ucfirst($this->param['controller']) . 'Controller';
//    if (class_exists($path)) {
//        $action = $this->param['action'] . 'Action';
//        if (method_exists($path, $action)) {
//            $controller = new $path($this->param);
//            $controller->$action();
//        } else {
//            View::errorCode(404);
//        }
//    } else {
//        View::errorCode(404);
//    }
//} else {
//    View::errorCode(404);
//}
