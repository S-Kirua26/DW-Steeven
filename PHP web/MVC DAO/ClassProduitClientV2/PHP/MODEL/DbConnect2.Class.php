<?php

Class DbConnect2{
    private static $database;

    public static function getDb() {
        return DbConnect2::$database;
    }

    public static function init() {
        try {
            self::$database = new PDO ( 'mysql:host=localhost;dbname=produits;charset=utf8', 'Zoro', 'Roronoa');
        }
        catch (Exception $e){
            die ('Erreur :' .$e->getMessage());
        }
    }
}