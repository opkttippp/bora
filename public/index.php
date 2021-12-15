<?php
session_start();
//ini_set('log_errors', TRUE);
//ini_set('error_log', 'logs/php_errors.log');
//ini_set('error_reporting', E_ALL);

use App\Core\Router;


require "../vendor/autoload.php";

$logger = new App\Mylogger();
$logger->log();

//spl_autoload_register(function ($class) {
//    $path = str_replace('\\', '/', $class);
//    $path .='.php';
//    $path ='../'.$path;
//    if (file_exists($path)) {
//    include $path;
//    }
////    echo $path.'<br>';
//});

try {
    $router = new Router($_SERVER['REQUEST_URI']);
    $router->run(4);

    $controller = $router->controller;
    $action = $router->action;
    $get = $router->get;

    $cont = new $router->cont($controller, $action, $get);
    $cont->$action();

} catch (Exception $error) {
    echo "Exception - $error";
}
//} catch (FrameworkException $error) {
//}
//catch (Exception $error) {
//    $controller = new ErrorController(Router::NOT_FOUND);
//    $controller->notFound;
//}
//} catch (Exception $error){
//
//}
