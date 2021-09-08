<?php

require_once('controller/BaseController.php');
require_once('model/User.php');

class UserController extends BaseController {

    private $method;
    private $route;
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function run($route) {

        $this->method = $route['method'];
        $this->route = $route['route'];

        switch($this->method) {
            case 'GET':
                return $this->selectAllUsers();
                break;
            case 'POST':
                // return $this->addOneUser();
                break;  
            case 'DELETE':
                break;         
            case 'PUT':
            case 'PATCH':
                break;
        }
    }

    private function selectAllUsers() {
        return $this->user->selecAll();
    }
}