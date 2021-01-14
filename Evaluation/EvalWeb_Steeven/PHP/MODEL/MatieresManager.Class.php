<?php

class MatieresManager 
{
	public static function add(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO matieres (libelleMatiere) VALUES (:libelleMatiere)");
        $q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}

	public static function update(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE matieres SET idMatiere=:idMatiere,libelleMatiere=:libelleMatiere WHERE idMatiere=:idMatiere");
        $q->bindValue(":idMatieres", $obj->getIdMatiere());
        $q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
		$q->execute();
	}

	public static function delete(Matieres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM matieres WHERE idMatiere=" .$obj->getIdMatiere());
	}

	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM matieres WHERE idMatiere =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Matieres($results);
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
		$q = $db->query("SELECT * FROM matieres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Matieres($donnees);
			}
		}
		return $liste;
	}
}