<?php

Class DbConnect{
    private static $database;

    public static function getDb() {
        return DbConnect::$database;
    }

    public static function init() {
        try {
            self::$database = new PDO ( 'mysql:host=localhost;dbname=clients;charset=utf8', 'Jean', 'Jeanjean');
        }
        catch (Exception $e){
            die ('Erreur :' .$e->getMessage(s));
        }
    }
}