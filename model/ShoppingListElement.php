<?php

require_once('BaseModel.php');

class ShoppingListElement extends BaseModel {
    private ?int $id;
    private int $idUser;
    private int $idShoppingList;
    private int $idProduct;
    private int $quantity;
    private bool $isChecked;

    public function __construct(
        ?int $idUser = null, 
        int $idShoppingList = null, 
        int $idProduct = null, 
        int $quantity = null,
        bool $isChecked = null,
        int $id = null)
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
    public function setIdUser(int $v) {$this->id = $v;}
    public function setIdShoppingList(int $v) {$this->idShoppingList = $v;}
    public function setIdProduct(int $v) {$this->idProduct = $v;}
    public function setQuantity(int $v) {$this->quantity = $v;}
    public function setIsChecked(bool $v) {$this->isChecked = $v;}
}