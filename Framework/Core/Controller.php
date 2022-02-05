<?php

namespace Framework\Core;

abstract class Controller
{

    public function __construct($controller, $action, $get)
    {
        $this->get = $get;
        $this->model = $this->loadModel($controller);
        $this->view = new View($controller, $action);
    }

    public function loadModel($name)
    {
        $path = 'App\Model\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path();
        }
        return false;
    }
}
