<?php

require_once('./model/singleton/DatabaseConnection.php');

abstract class BaseCRUD {
    
    abstract protected function hydrate();

    protected PDO $connection;
    protected string $query;
    protected object $modelObject;

    protected function __construct() {
        $this->connection = DatabaseConnection::getInstance();
    }

    protected function create() {

        if(empty($this->modelObject)) {
            return null;
        }

        $fields = $this->modelObject->getPropertyNames();
        $table = $fields['tableName']['snake'];

        $queryFields = '(';
        foreach($fields['fieldNames'] as $field) {
            $queryFields .= $field['sql'].', ';
        }
        $queryFields = rtrim($queryFields, ', ').')';
        $namedParams = '(';
        foreach($fields['fieldNames'] as $field) {
            $namedParams .= ':'.$field['sql'].', ';
        }
        $namedParams = rtrim($namedParams, ', ').')';

        $this->query = 'INSERT INTO '.$table.' '.$queryFields.' VALUES '.$namedParams;
        $stmt = $this->connection->prepare($this->query);
        foreach($fields['fieldNames'] as $field) {
            $func = $field['getter'];
            #####
            var_dump($func);
            #####
            $stmt->bindValue(':'.$field['sql'], $this->modelObject->$func());
        }
        $stmt->execute();
        
        unset($this->modelObject);
        
    }

}