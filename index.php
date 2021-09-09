<?php

require_once('model/config/Boostrap.php');

$bootstrap = Bootstrap::getInstance();
$response = $bootstrap->route();

header('Content-Type: application/json; charset=utf-8');
echo $response;
// var_dump($response);