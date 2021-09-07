<?php

require_once('BaseModel.php');

class ShoppingListElement extends BaseModel {
    private $id;
    private $idUser;
    private $idShoppingList;
    private $idProduct;
    private $quantity;
    private $isChecked;

    public function __construct(
        $idUser = null, 
        $idShoppingList = null, 
        $idProduct = null, 
        $quantity = null,
        $isChecked = null,
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->idUser = $idUser;
        $this->idShoppingList = $idShoppingList;
        $this->idProduct = $idProduct;
        $this->quantity = $quantity;
        $this->isChecked = $isChecked;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getIdUser() {return $this->idUser;}
    public function getIdShoppingList() {return $this->idShoppingList;}
    public function getIdProduct() {return $this->idProduct;}
    public function getQuantity() {return $this->quantity;}
    public function getIsChecked() {return $this->isChecked;}

    // No setter for id.
    public function setIdUser($v) {$this->id = $v;}
    public function setIdShoppingList($v) {$this->idShoppingList = $v;}
    public function setIdProduct($v) {$this->idProduct = $v;}
    public function setQuantity($v) {$this->quantity = $v;}
    public function setIsChecked($v) {$this->isChecked = $v;}
}