<?php

class BaseModel {

    protected $propertyNames;

    public function __construct($childProperties, $childClassName) {
        $this->propertyNames['tableName'] = $this->camelToSnake($childClassName);
        foreach($childProperties as $name) {
            $this->propertyNames['fieldNames'][] = array(
                'sql' => $this->camelToSnake($name),
                'php' => $name,
            );
        }
    }

    protected function camelToSnake($string) {
        $snake = '';
        $_string = preg_split('/(?<=[a-z])(?=[A-Z])|(?<=[A-Z])(?=[A-Z][a-z])/', $string);
        foreach($_string as $index => $word) {
            if($index == 0) {
                $snake .= strtolower($word);
            } else {
                $snake .= '_'.strtolower($word);
            }
        }
        return $snake;
    }

    public function getPropertyNames() {return $this->propertyNames;}
}