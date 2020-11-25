<?php
class ProduitsManager2 {

    public static function add(Produits2 $obj)
    {
        $database = DbConnect2::getDb();
        $q = $database->prepare("INSERT INTO info (libelleProduit,prix,dateDePeremption) VALUES (:libelleProduit,:prix,:dateDePeremption)");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->execute();
    }

    public static function update(Produits2 $obj)
    {
        $database = DbConnect2::getDb();
        $q = $database->prepare("UPDATE info SET libelleProduit=:libelleProduit, prix=:prix, dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }

    public static function delete(Produits2 $obj)
    {
        $database = DbConnect2::getDb();
        $database->exec("DELETE FROM info WHERE idProduit=" . $obj->getIdProduit());
    }

    public static function findById($id)
    {
        $database = DbConnect2::getDb();
        $id = (int) $id;  
        $q = $database->query("SELECT * FROM info WHERE idProduit=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Produits2($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $database = DbConnect2::getDb();
        $liste = [];
        $q = $database->query("SELECT * FROM info");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits2($donnees);
            }
        }
        return $liste;
    }

    public static function getListByCategorie($idCategorie)
    {
        $idCategorie=(int) $idCategorie;
        $db = DbConnect2::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM produits where idCategorie=$idCategorie");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits2($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }
}