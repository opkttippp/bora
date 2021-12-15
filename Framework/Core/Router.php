<?php

namespace Framework\Core;

use Exception;

class Router
{
    public string $cont;
    public string $controller;
    public string $action;
    private string $route;
    public string $get;

    public const HOME = 'home/index';

    public function __construct(string $route)
    {
        $this->route = $route;
    }

    public function run()
    {
        if ($this->route === '/') {
            $this->route .= self::HOME;
        }
        $matches = explode("/", $this->route);

        $this->cont = 'App\\Controller\\' . ucfirst($matches[1]) . 'Controller';
        $this->controller = ucfirst($matches[1]);
        $this->action = $matches[2] ?? '';
        $this->get = $matches[3] ?? '';
    }
}
