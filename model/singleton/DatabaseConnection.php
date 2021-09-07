<?php

class DatabaseConnection {

    private function __construct() {}
    private function __clone() {}

    private static $instance;
    
    public static function getInstance() {

        if(empty(self::$instance)) {

            $user = 'root';
            $pass = '';

            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=shopping_list', $user, $pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                // echo 'instanciation succeeded.';
                self::$instance->query('SET NAMES utf8');
                self::$instance->query('SET CHARACTER SET utf8');

            } catch(PDOException $error) {
                echo 'instanciation failed';
                echo $error->getMessage();
            }

        }

        return self::$instance;
    }

}
