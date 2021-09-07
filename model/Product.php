<?php

require_once('BaseModel.php');

class Product extends BaseModel {
    private $id;
    private $name;
    private $imageUrl;
    private $price;

    public function __construct(
        $name = '', 
        $imageUrl = '', 
        $price = null, 
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->name = $name;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getName() {return $this->name;}
    public function getImageUrl() {return $this->imageUrl;}
    public function getPrice() {return $this->price;}

    // No setter for id.
    public function setName($v) {$this->id = $v;}
    public function setImageUrl($v) {$this->imageUrl = $v;}
    public function setPrice($v) {$this->price = $v;}
}