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

    public static function errorCode($err)
    {
        ob_start();
        $error = $err;
        require '../app/View/Templates/Error/errors.php';
        ob_end_flush();
        exit();
    }
}
