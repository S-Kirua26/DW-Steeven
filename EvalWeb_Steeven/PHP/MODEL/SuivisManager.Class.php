<?php

class SuivisManager 
{
	public static function add(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO suivis (note,idMatiere,idEleve) VALUES (:note,idMatiere,idEleve)");
        $q->bindValue(":note", $obj->getNote());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":idEleve", $obj->getIdEleve());
		$q->execute();
	}

	public static function update(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE suivis SET idSuivi=:idSuivi,idMatiere=:idMatiere,idEleve=:idEleve WHERE idSuivi=:idSuivi");
        $q->bindValue(":idSuivi", $obj->getIdSuivi());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":idEleve", $obj->getIdEleve());
		$q->execute();
	}

	public static function delete(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM suivis WHERE idSuivi=" .$obj->getIdSuivi());
	}

	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM suivis WHERE idSuivi =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivis($results);
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
		$q = $db->query("SELECT * FROM suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivis($donnees);
			}
		}
		return $liste;
	}
}