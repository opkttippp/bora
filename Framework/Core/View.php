<?php

namespace Framework\Core;

class View
{
    public $path;
    public $layout = 'default';

    public function __construct($controller, $action)
    {
        $this->path = $controller . '/' . $action;
    }

    public function render($title, $list = [])
    {
        if (file_exists('../app/View/Templates/' . $this->path . '.php')) {
            ob_start();
            $content = '../app/View/Templates/' . $this->path . '.php';
            require '../app/View/Layouts/' . $this->layout . '.php';
            echo ob_get_clean();
        } else {
            echo ' Вид' . "$this->path" . ' не найден';
        }
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        require 'app/views/errors/' . $code . '.php';
        exit();
    }
}
