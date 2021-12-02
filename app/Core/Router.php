<?php

namespace App\Core;

use Exception;

class Router
{
    public string $cont;
    public string $controller;
    public string $action;
    private string $route;
    public string $get;

//    const NOT_FOUND = '/errors/notFound';
    public const HOME = 'home/index';

    public function __construct(string $route)
    {
        $this->route = $route;
    }

    public function run()
    {
        try {
            if ($this->route === '/') {
                $this->route .= self::HOME;
            }

//            preg_match('/^\/(.+)\/(.+)\/(.+)$/', $this->route, $matches);
//
//            echo count($matches);
//            if (count($matches) < 4) {
//                preg_match('/^\/(.+)\/(.+)$/', $this->route, $matches);
//            }

        $matches = explode("/", $this->route);

//            echo "<pre>";
//            print_r($matches);

        $this->cont = 'App\\Controller\\' . ucfirst($matches[1]) . 'Controller';
        $this->controller = ucfirst($matches[1]);
        $this->action = $matches[2] ?? '';
        $this->get = $matches[3] ?? '';

//            if (!class_exists($this->cont)) {
//                throw new BadRouteException();
//            }
        } catch (Exception $error) {
            echo 111;
        }
    }
}
