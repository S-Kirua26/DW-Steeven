<?php

class ConventionsManager
{
    public static function add(Conventions $obj)
    {
        $db= DbConnect::getDb();
        $q= $db->prepare("INSERT INTO Conventions (nomConvention, categorieConvention,idSalle) VALUES(:nomConvention, :categorieConvention,:idSalle)");
        $q->bindValue(":nomConvention", $obj->getNomConvention());
        $q->bindValue(":categorieConvention", $obj->getCategorieConvention());
        $q->bindValue(":idSalle", $obj->getIdSalle());
        $q->execute();
    }

    public static function update(Conventions $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Conventions SET nomConvention=:nomConvention, categorieConvention=:categorieConvention WHERE idConvention=:idConvention");
        $q->bindValue(":nomConvention", $obj->getNomConvention());
        $q->bindValue(":categorieConvention", $obj->getCategorieConvention());
        $q->bindValue(":idConvention", $obj->getIdConvention());
        $q->execute();
    }

    public static function delete(Conventions $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Conventions WHERE idConvention=".$obj->getIdConvention());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id= (int) $id;
        $q = $db->query("SELECT * FROM Conventions WHERE idConvention=". $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if($results != false)
        {
            return new Conventions($results);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q= $db->query("SELECT * FROM Conventions");
        while($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[]= new Conventions($donnees);
            }
        }
        return $liste;
    }
}