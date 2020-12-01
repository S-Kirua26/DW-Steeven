<?php

class VisiteursManager 
{
	public static function add(Visiteurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Visiteurs (nomVisiteur,prenomVisiteur,adresseVisiteur,codePostalVisiteur,villeVisiteur) VALUES (:nomVisiteur,:prenomVisiteur,:adresseVisiteur,:codePostalVisiteur,:villeVisiteur)");
		$q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
		$q->bindValue(":prenomVisiteur", $obj->getPrenomVisiteur());
        $q->bindValue(":adresseVisiteur", $obj->getAdresseVisiteur());
        $q->bindValue(":codePostalVisiteur", $obj->getCodePostalVisiteur());
		$q->bindValue(":villeVisiteur", $obj->getVilleVisiteur());
		$q->execute();
	}

	public static function update(Visiteurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Visiteurs SET idVisiteur=:idVisiteur,nomVisiteur=:nomVisiteur,prenomVisiteur=:prenomVisiteur,adresseVisiteur=:adresseVisiteur,codePostalVisiteur=:codePostalVisiteur,villeVisiteur=:villeVisiteur WHERE idVisiteur=:idVisiteur");
		$q->bindValue(":idVisiteur", $obj->getIdVisiteur());
		$q->bindValue(":nomVisiteur", $obj->getNomVisiteur());
		$q->bindValue(":prenomVisiteur", $obj->getPrenomVisiteur());
        $q->bindValue(":adresseVisiteur", $obj->getAdresseVisiteur());
        $q->bindValue(":codePostalVisiteur", $obj->getCodePostalVisiteur());
		$q->bindValue(":villeVisiteur", $obj->getVilleVisiteur());
		$q->execute();
    }
    
	public static function delete(Visiteurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Visiteurs WHERE idVisiteur=" .$obj->getIdVisiteur());
		$db->exec("DELETE FROM Visite WHERE idVisite=" .$obj->getIdVisiteur());
    }
    
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Visiteurs WHERE idVisiteur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Visiteurs($results);
		}
		else
		{
			return false;
		}
    }
    
	public static function getList()
	{
		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Visiteurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Visiteurs($donnees);
			}
		}
		
		return $liste;
    }
    
}