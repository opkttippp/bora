<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//echo phpinfo();
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class);
    $path .= '.php';
    if (file_exists($path)) {
        include $path;
    }
});

$layout = "public/view/block/layout.php";
$params = $_GET;
$template = $_GET['page'];

$s = new render();
$s->rend($layout, $template, $params);


