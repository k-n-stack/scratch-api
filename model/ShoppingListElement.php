<?php

require_once('BaseModel.php');



class ShoppingListElement extends BaseModel {
    private $id;
    private $idShoppingList;
    private $idProduct;
    private $quantity;
    private $tempName;
    private $tempDescription;
    private $isChecked;

    public function __construct(
        $idShoppingList = null, 
        $idProduct = null, 
        $quantity = null,
        $tempName = null,
        $tempDescription = null,
        $isChecked = null,
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->idShoppingList = $idShoppingList;
        $this->idProduct = $idProduct;
        $this->quantity = $quantity;
        $this->tempName = $tempName;
        $this->tempDescription = $tempDescription;
        $this->isChecked = $isChecked;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getIdShoppingList() {return $this->idShoppingList;}
    public function getIdProduct() {return $this->idProduct;}
    public function getQuantity() {return $this->quantity;}
    public function getTempName() {return $this->tempName;}
    public function getTempDescription() {return $this->tempDescription;}
    public function getIsChecked() {return $this->isChecked;}

    // No setter for id.
    public function setIdShoppingList($v) {$this->idShoppingList = $v;}
    public function setIdProduct($v) {$this->idProduct = $v;}
    public function setQuantity($v) {$this->quantity = $v;}
    public function setTempName($v) {$this->tempName = $v;}
    public function setTempDescription($v) {$this->tempDescription = $v;}
    public function setIsChecked($v) {$this->isChecked = $v;}
}