<?php

require_once('crud/ProductCRUD.php');
require_once('model/Product.php');
$prod = new Product('salade', 'http://blabla.com', 1.4);
$crud = new ProductCRUD($prod);
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
$crud->create();
var_dump($crud);
exit;


require_once('model/ShoppingListElement.php');

$variable = new ShoppingListElement();
var_dump($variable);
exit;

// print_r(preg_split('/((?:^|[A-Z])[a-z]+)/', 'unGrandTestDeVaribaleEnCamelCase'), true);
// preg_match_all('/((?:^|[A-Z])[a-z]+)/','unGrandTestDeVaribaleEnCamelCase',$variable);
preg_match_all('/((?:^|[A-Z])[a-z]+)/','un',$variable);

$variable = preg_split('/(?<=[a-z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', 'unGrandTestDeVaribaleEnCamelCase');
$variable = preg_split('/(?<=[a-z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', 'getDAOShit');

print_r($variable);