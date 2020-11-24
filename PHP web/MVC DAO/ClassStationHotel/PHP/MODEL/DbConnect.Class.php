<?php

Class DbConnect{
    private static $database;

    public static function getDb() {
        return DbConnect::$database;
    }

    public static function init() {
        try {
            self::$database = new PDO ( 'mysql:host=localhost;dbname=stationshotels;charset=utf8', 'Gon', 'Freecs');
        }
        catch (Exception $e){
            die ('Erreur :' .$e->getMessage());
        }
    }
}
