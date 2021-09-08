<?php

require_once('model/crud/BaseCRUD.php');

abstract class BaseModel {

    use BaseCRUD; 

    protected array $propertyNames;

    protected function __construct($childProperties, $childClassName) {
        $this->connection = DatabaseConnection::getInstance();
        $this->propertyNames['tableName'] = $this->parsePropName($childClassName);
        foreach($childProperties as $name) {
            if($name != 'propertyNames' && $name != 'id' && $name != 'connection' && $name != 'query') {
                $this->propertyNames['fieldNames'][] = array(
                    'sql' => $this->parsePropName($name)['snake'],
                    'getter' => $this->parsePropName($name)['getter'],
                );
            }
        }
    }

    protected function parsePropName($string) {
        $snake = '';
        $getter = '';
        $_string = preg_split('/(?<=[a-z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', $string);
        foreach($_string as $index => $word) {
            if($index == 0) {
                $snake .= strtolower($word);
                $getter .= 'get'.ucfirst(strtolower($word)); 
            } else {
                $snake .= '_'.strtolower($word);
                $getter .= ucfirst(strtolower($word)); 
            }
        }
        return array(
            'snake' => $snake,
            'getter' => $getter
        );
    }

    public function getPropertyNames() {return $this->propertyNames;}
}