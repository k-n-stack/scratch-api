<?php

require_once('model/BaseModel.php');

class User extends BaseModel {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function __construct(
        $firstname = '', 
        $lastname = '', 
        $email = '', 
        $password = '',
        $id = null)
    {
        parent::__construct(array_keys(get_class_vars(get_class($this))), get_class($this));
        $this->firstame = $firstname;
        $this->lastame = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
    }

    public function getId() {return $this->id;}
    public function getFirstname() {return $this->firstname;}
    public function getLastname() {return $this->lastname;}
    public function getEmail() {return $this->email;}
    public function getPassword() {return $this->password;}

    // No setter for id.
    public function setFirstname($v) {$this->firstname = $v;}
    public function setLastname($v) {$this->lastname = $v;}
    public function setEmail($v) {$this->email = $v;}
    public function setPassword($v) {$this->password = $v;}
}