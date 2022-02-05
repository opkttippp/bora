<?php

namespace Framework\Core;

class Router
{
    public string $controller;
    public string $action;
    public string $get;
    public string $url;
    public string $route;

    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];

        if ($this->url === '/') {
            $this->url .= 'home/index';
        }
        $matches = explode("/", $this->url);

        $this->route = 'App\\Controller\\' . ucfirst($matches[1]) . 'Controller';

        if (class_exists($this->route)) {
            $this->controller = ucfirst($matches[1]);
            if (method_exists($this->route, $matches[2])) {
                $this->action = $matches[2];
                $this->get = $matches[3] ?? '';
            } else {
                View::errorCode("нет метода ");
            }
            return $this;
        }
        View::errorCode("Нет контроллера ");
    }
}
