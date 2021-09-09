<?php

require_once('model/singleton/DatabaseConnection.php');

trait BaseCRUD {

    protected $connection;
    protected $query;

    public function create() {

        if(!empty($this->getId())) {
            return null;
        }

        $fields = $this->getPropertyNames();
        $table = $fields['tableName']['snake'];

        $queryFields = $this->getQueryFields();
        $namedParams = $this->getNamedParams();

        $this->query = 'INSERT INTO '.$table.' '.$queryFields.' VALUES '.$namedParams;
        $stmt = $this->connection->prepare($this->query);
        foreach($fields['fieldNames'] as $field) {
            $func = $field['getter'];
            $stmt->bindValue(':'.$field['sql'], $this->$func());
        }
        $stmt->execute();
        unset($this->query);
    }

    public function selectOne(int $id = null) {
        
        if(empty($id)) {
            $id = $this->getId();
        }

        $fields = $this->getPropertyNames();
        $table = $fields['tableName']['snake'];

        $this->query = 'SELECT * from '.$table.' WHERE id = :id';
        $stmt = $this->connection->prepare($this->query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function selecAll() {
        $fields = $this->getPropertyNames();
        $table = $fields['tableName']['snake'];
        $this->query = 'SELECT * from '.$table;
        $stmt = $this->connection->prepare($this->query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(int $id = null) {

        if(empty($id)) {
            $id = $this->getId();
        }
        
        $fields = $this->getPropertyNames();
        $table = $fields['tableName']['snake'];

        $updateFields = '';
        foreach($fields['fieldNames'] as $field) {
            $updateFields .= $this->getUpdateFields($field['sql']);
        }
        $updateFields = rtrim($updateFields, ', ');

        $this->query = 'UPDATE '.$table.' SET '.$updateFields.' WHERE id = :id';
        $stmt = $this->connection->prepare($this->query);

        foreach($fields['fieldNames'] as $field) {
            $func = $field['getter'];
            $stmt->bindValue(':'.$field['sql'], $this->$func());
        }
        $stmt->bindValue(':id', $id);

        $stmt->execute();

    }

    public function delete(int $id = null) {
        
        if(empty($id)) {
            $id = $this->getId();
        }

        $table = $this->getPopertyNames()['tableName']['snake'];

        $this->query = 'DELETE from '.$table.' WHERE id = :id';

    }

    protected function getQueryFields() {
        $queryFields = '(';
        foreach($this->getPropertyNames()['fieldNames'] as $field) {
            $queryFields .= $field['sql'].', ';
        }
        return rtrim($queryFields, ', ').')';
    }

    protected function getNamedParams() {
        $queryFields = '(';
        foreach($this->getPropertyNames()['fieldNames'] as $field) {
            $queryFields .= ':'.$field['sql'].', ';
        }
        return rtrim($queryFields, ', ').')';
    }

    protected function getUpdateFields(string $name, bool $comma = true) {
        return $name.' = :'.$name.($comma ? ', ' : '');
    }

}