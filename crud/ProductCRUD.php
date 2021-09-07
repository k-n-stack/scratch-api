<?php

require_once('BaseCRUD.php');

class ProductCRUD extends BaseCRUD {

    public function __construct(Product $obj) {
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