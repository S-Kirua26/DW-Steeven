<?php
class ClientsManager {

    public static function add(Clients $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("INSERT INTO information (nomClient,prenomClient,enfantClient) VALUES (:nomClient,:prenomClient,:enfantClient)");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":enfantClient", $obj->getEnfantClient());
        $q->execute();
    }

    public static function update(Clients $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("UPDATE information SET nomClient=:nomClient, prenomClient=:prenomClient, enfantClient=:enfantClient WHERE idClient=:idClient");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":enfantClient", $obj->getEnfantClient());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $database = DbConnect::getDb();
        $database->exec("DELETE FROM information WHERE idClient=" . $obj->getIdClient());
    }

    public static function findById($id)
    {
        $database = DbConnect::getDb();
        $id = (int) $id;  
        $q = $database->query("SELECT * FROM information WHERE idClient=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Clients($results);
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
        $q = $database->query("SELECT * FROM information");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Clients($donnees);
            }
        }
        return $liste;
    }


}