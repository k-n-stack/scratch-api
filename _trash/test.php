<?php

// $date = date('Y-m-d H:i:s');

// var_dump($date);
// exit;

require_once('model/Product.php');
$prod = new Product('tropmegalol', 'http://amazon.com', 199.4, 5);
$prod->update();

exit;

var_dump($prod->update(16));

// var_dump($prod);
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