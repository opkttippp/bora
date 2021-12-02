<?php
session_start();
//include "../Error.php";

use App\Core\Router;

require "../vendor/autoload.php";

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
    $router->run();

    $controller = $router->controller;
    $action = $router->action;
    $get = $router->get;

    $cont = new $router->cont($controller, $action, $get);
    $cont->$action();
} catch (Exception $error) {
    echo 123;
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
