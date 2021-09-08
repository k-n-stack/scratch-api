<?php

require_once('controller/BaseController.php');
require_once('model/User.php');

$test = new User();

class UserController extends BaseController {
    public function __construct() {}
    public function run($route) {
        return array(
            'code' => 0,
            'message' => 'from UserController'
        );
    }
}