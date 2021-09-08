<?php

require_once('BaseModel.php');

class ShoppingList extends BaseModel {
    private $id;
    private $idUser;
    private $idShoppingListElement;
    private $date;
    private $isArchived;

    public function __construct(
        $idUser = null, 
        $idShoppingListElement = null, 
        $date = null, 
        $isArchived = null,
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->idUser = $idUser;
        $this->idShoppingListElement = $idShoppingListElement;
        $this->date = $date;
        $this->isArchived = $isArchived;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getIdUser() {return $this->idUser;}
    public function getIdShoppingListElement() {return $this->idShoppingListElement;}
    public function getDate() {return $this->date;}
    public function isArchived() {return $this->isArchived;}

    // No setter for id.
    public function setIdUser($v) {$this->id = $v;}
    public function setIdShoppingListElement($v) {$this->idShoppingListElement = $v;}
    public function setDate($v) {$this->date = $v;}
    public function setIsArchived($v) {$this->isArchived = $v;}
}