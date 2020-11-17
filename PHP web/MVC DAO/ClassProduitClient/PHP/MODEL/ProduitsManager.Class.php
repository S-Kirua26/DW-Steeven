<?php
class ProduitsManager {

    public static function add(Produits $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("INSERT INTO info (libelleProduit,prix,dateDePeremption) VALUES (:libelleProduit,:prix,:dateDePeremption)");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->execute();
    }

    public static function update(Produits $obj)
    {
        $database = DbConnect::getDb();
        $q = $database->prepare("UPDATE info SET libelleProduit=:libelleProduit, prix=:prix, dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }

    public static function delete(Produits $obj)
    {
        $database = DbConnect::getDb();
        $database->exec("DELETE FROM info WHERE idProduit=" . $obj->getIdProduit());
    }

    public static function findById($id)
    {
        $database = DbConnect::getDb();
        $id = (int) $id;  
        $q = $database->query("SELECT * FROM info WHERE idProduit=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Produits($results);
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
        $q = $database->query("SELECT * FROM info");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits($donnees);
            }
        }
        return $liste;
    }


}