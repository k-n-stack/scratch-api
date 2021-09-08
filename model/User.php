<?php

require_once('model/BaseModel.php');

class User extends BaseModel {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct(
        $firstName = '', 
        $lastName = '', 
        $email = '', 
        $password = '',
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getFirstName() {return $this->firstName;}
    public function getLastName() {return $this->lastName;}
    public function getEmail() {return $this->email;}
    public function getPassword() {return $this->password;}

    // No setter for id.
    public function setFirstName($v) {$this->id = $v;}
    public function setLastName($v) {$this->lastName = $v;}
    public function setEmail($v) {$this->email = $v;}
    public function setPassword($v) {$this->password = $v;}
}