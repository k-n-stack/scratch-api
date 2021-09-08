<?php

require_once('model/config/Router.php');

class Bootstrap {

    private $uri;
    private $method;
    private $router;
    private static $instance;

    private function __construct() {
        $this->router = Router::getInstance();
        $this->uri = '/'.filter_var(str_replace('url=', '', $_SERVER['REDIRECT_QUERY_STRING']), FILTER_VALIDATE_REGEXP, array(
            'options' => array("regexp"=>"/^[a-zA-Z0-9_\/\-]*$/")
        ));
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    private function __clone() {}

    public function route() {
        var_dump('Bootstrap::route()');
        var_dump($this->method);
        var_dump($this->uri);
        return json_encode($this->router->checkRoute($this->method, $this->uri));
    }

    public function _help_print() {
        var_dump(parse_url($this->uri, PHP_URL_PATH));
        var_dump($this->method);
    }

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Bootstrap;
        }
        return self::$instance;
    }
}