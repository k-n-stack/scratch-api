<?php

require_once('BaseModel.php');

class Product extends BaseModel {
    private ?int $id;
    private string $name;
    private string $imageUrl;
    private float $price;

    public function __construct(
        string $name = '', 
        string $imageUrl = '', 
        float $price = null, 
        ?int $id = null)
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
    public function setName(string $v) {$this->id = $v;}
    public function setImageUrl(string $v) {$this->imageUrl = $v;}
    public function setPrice(float $v) {$this->price = $v;}

    public function create() {
        parent::create();
    }


}