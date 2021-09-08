<?php

require_once('model/config/Boostrap.php');

// header('Content-Type: application/json; charset=utf-8');

$bootstrap = Bootstrap::getInstance();
$response = $bootstrap->route();
var_dump('index.php');
var_dump($response);