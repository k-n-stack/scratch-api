<?php

require_once('controller/BaseController.php');
require_once('model/ShoppingListElement.php');

class ShoppingListElementController extends BaseController {

    private $method;
    private $route;
    private $shoppingListElement;

    public function __construct() {
        $this->shoppingListElement = new ShoppingListElement();
    }

    public function run($route) {

        $this->method = $route['method'];
        $this->route = $route['route'];

        switch($this->method) {
            case 'GET':
                return $this->selectAllUsers();
                break;
            case 'POST':
                return $this->addOneUser();
                break;
            case 'DELETE':
                break;         
            case 'PUT':
            case 'PATCH':
                break;
        }
    }

    private function selectAllUsers() {
        return $this->shoppingListElement->selecAll();
    }

    private function addOneUser() {
        $data = json_decode(file_get_contents('php://input'), true);

        $this->shoppingListElement->setIdShoppingList(1);
        $this->shoppingListElement->setIdProduct(1);
        $this->shoppingListElement->setQuantity($data['quantity']);
        $this->shoppingListElement->setTempName($data['tempName']);
        $this->shoppingListElement->setTempDescription($data['tempDescription']);
        $this->shoppingListElement->setIsChecked(0);
        $this->shoppingListElement->create();
        return array(
            'code' => 777,
            'message' => 'add one shopping list element'
        );
    }
}