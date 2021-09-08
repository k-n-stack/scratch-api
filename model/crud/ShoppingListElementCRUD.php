<?php

require_once('BaseCRUD.php');

class ShoppingListElementCRUD extends BaseCRUD {

    public function __construct() {
        parent::__construct();
    }

    public function create() {
        parent::create();
    }

    public function selectOne($id) {
        parent::SelectOne($id);
    }

    public function update($id) {
        parent::update($id);
    }

    public function delete($id) {
        parent::delete($id);
    }

    public function hydrate() {}

}