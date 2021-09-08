<?php

class Router {

    private $routes;
    private static $instance;

    private function __construct() {
        $this->routes = array();
        $this->addRoute('GET', '/users', 'user');
        $this->addRoute('GET', '/list', 'list');
        $this->addRoute('POST', '/users/*', 'user');
    }
    private function __clone() {}

    private function addRoute($method, $route, $controller) {
        array_push($this->routes, array(
            'method' => $method,
            'route' => $route,
            'controller' => $controller
        ));
    }

    private function badReqResponse() {
        return array(
            'code' => 1,
            'message' => 'erreur, trop lol'
        );
    }

    private function importController($route) {
        require_once('controller/'.$route['controller'].'Controller.php');
        $_className = ucfirst($route['controller']).'Controller';
        $controller = new $_className();
        return $controller->run($route);
    }

    public function checkRoute($method, $uri) {
        $isReqValid = false;
        foreach($this->routes as $route) {
            if($route['method'] == $method && $route['route'] == $uri) {
                $validRoute = $route;
                $isReqValid = true;
            }
        }
        return $isReqValid ? $this->importController($validRoute) : $this->badReqResponse();
    }

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Router();
        }
        return self::$instance;
    }
}