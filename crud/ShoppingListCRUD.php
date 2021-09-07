<?php

require_once('ShoppingListCRUD.php');

class ShoppingListCRUD extends BaseCRUD {

    public function __construct(ShoppingList $obj) {
        if(empty($obj)) {
            return null;
        }
        $this->modelObject = $obj;
        parent::__construct();
    }

    public function create() {
        parent::create();
        unset($this->modelObject);
    }

    public function hydrate() {}

}