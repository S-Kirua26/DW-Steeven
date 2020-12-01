<?php
class SallesManager {

    public static function add(Salles $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("INSERT INTO Salles (nomSalle,adresseSalle,villeSalle) VALUES (:nomSalle,:adresseSalle,:villeSalle)");
        $q->bindValue(":nomSalle", $obj->getNomSalle());
        $q->bindValue(":adresseSalle", $obj->getAdresseSalle());
        $q->bindValue(":villeSalle", $obj->getVilleSalle());
        $q->execute();
    }

    public static function update(Salles $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("UPDATE Salles SET nomSalle=:nomSalle, adresseSalle=:adresseSalle, villeSalle=:villeSalle WHERE idSalle=:idSalle");
        $q->bindValue(":nomSalle", $obj->getNomSalle());
        $q->bindValue(":adresseSalle", $obj->getAdresseSalle());
        $q->bindValue(":villeSalle", $obj->getVilleSalle());
        $q->bindValue(":idSalle", $obj->getIdSalle());
        $q->execute();
    }

    public static function delete(Salles $obj) // on delete en cascade 
    {
        $listeEmplacements = EmplacementsManager::getBySalle($obj->getIdSalle());
        foreach ($listeEmplacement as $unEmplacement)
        {
            EmplacementsManager::delete($unEmplacement);
        }
        $database = DbConnect::getDb();
        $database->exec("DELETE FROM Salles WHERE idSalle=" . $obj->getIdSalle());
    }

    public static function findById($id)
    {
        $database = DbConnect::getDb();
        $id = (int) $id;  
        $q = $database->query("SELECT * FROM Salles WHERE idSalle=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Salles($results);
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
        $q = $database->query("SELECT * FROM Salles");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Salles($donnees);
            }
        }
        return $liste;
    }


}