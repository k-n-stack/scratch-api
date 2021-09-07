<?php

require_once('BaseModel.php');

class ShoppingList extends BaseModel {
    private ?int $id;
    private int $idUser;
    private int $idShoppingListElement;
    private $date;
    private bool $isArchived;

    public function __construct(
        int $idUser = null, 
        int $idShoppingListElement = null, 
        $date = null, 
        bool $isArchived = null,
        ?int $id = null)
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
    public function setIdUser(int $v) {$this->id = $v;}
    public function setIdShoppingListElement(int $v) {$this->idShoppingListElement = $v;}
    public function setDate($v) {$this->date = $v;}
    public function setIsArchived(bool $v) {$this->isArchived = $v;}
}