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
<!--<script src="./style/script.js"></script>-->
<script src="./style/main.js"></script>

<!--<div id="id">Кол лайков = 0</div>-->
<!--<button id="btn">Поставить лайк</button>-->
<!--<button id="btn-2">Обнулить</button>-->
<!---->


<!--<div >Кол лайков = {{likes}}</div>-->
<!--<button @klick="likes +=1">Поставить лайк</button>-->
<!---->
<!---->


<!--<div id="hello-vue" class="demo">-->
<!--  {{ message }}-->
<!--</div>-->

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <meta name="viewport"-->
<!--        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--  <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--  <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div id="app"></div>-->
<!--<script src="/style/script.js"></script>-->
<!--</body>-->
<!--</html>-->
