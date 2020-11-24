<?php
class StationManager {

    public static function add(Station $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("INSERT INTO stations (nomStation,altitudeStation) VALUES (:nomStation,:altitudeStation)");
        $q->bindValue(":nomStation", $obj->getNomStation());
        $q->bindValue(":altitudeStation", $obj->getAltitudeStation());
        $q->execute();
    }

    public static function update(Station $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("UPDATE stations SET nomStation=:nomStation, altitudeStation=:altitudeStation  WHERE idStation=:idStation");
        $q->bindValue(":nomStation", $obj->getNomStation());
        $q->bindValue(":altitudeStation", $obj->getAltitudeStation());
        $q->bindValue(":idStation", $obj->getIdStation());
        $q->execute();
    }

    public static function delete(Station $obj)
    {
        $database = DbConnect::getDb();
        $database->exec("DELETE FROM stations WHERE idStation=" . $obj->getIdStation());
    }

    public static function findById($id)
    {
        $database = DbConnect::getDb();
        $id = (int) $id;  
        $q = $database->query("SELECT * FROM stations WHERE idStation=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Station($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $database = DbConnect::getDb();
        $liste = [];
        $q = $database->query("SELECT * FROM stations");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Station($donnees);
            }
        }
        return $liste;
    }


}