<?php

require_once('BaseModel.php');

class User extends BaseModel {
    private ?int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    public function __construct(
        string $firstName = '', 
        string $lastName = '', 
        string $email = '', 
        string $password = '',
        ?int $id = null)
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
    public function setFirstName(string $v) {$this->id = $v;}
    public function setLastName(string $v) {$this->lastName = $v;}
    public function setEmail(string $v) {$this->email = $v;}
    public function setPassword(string $v) {$this->password = $v;}
}