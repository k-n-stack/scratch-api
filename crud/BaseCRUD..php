<?php

require_once('../model/singleton/DatabaseConnection.php');

abstract class BaseCRUD {

    protected $connection;
    protected $modelObject;
    protected $query;
    
    abstract protected function hydrate();

    public function __construct() {
        $this->connection = DatabaseConnection::getInstance();
    }

    public function create() {
        if(empty($this->instance)) {
            return null;
        } else {
            $table = $this->modelObject->getPropertyNames()['tableName'];
            $sqlFields = $this->modelObject->getPropertyNames()['fieldNames']['sql'];
            $phpFields = $this->modelObject->getPropertyNames()['fieldNames']['php'];
        }


        
        $stmt = $this
            ->connection
            ->prepare();

        
    }

}