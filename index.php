<?php

require_once('model/config/Boostrap.php');

$bootstrap = Bootstrap::getInstance();
$response = $bootstrap->route();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: application/json; charset=utf-8');

echo $response;
// var_dump($response);