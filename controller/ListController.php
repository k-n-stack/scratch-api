<?php

require_once('controller/BaseController.php');

class ListController extends BaseController {
    public function __construct() {}
    public function run($route) {
        return array(
            'code' => 0,
            'message' => 'from ListController'
        );
    }
}