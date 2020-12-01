<?php

class EmplacementsManager
{
	public static function add(Emplacements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO emplacements (numeroEmplacement,idSalle) VALUES (:numeroEmplacement,:idSalle)");
		$q->bindValue(":numeroEmplacement", $obj->getNumeroEmplacement());
		$q->bindValue(":idSalle", $obj->getIdSalle());
		$q->execute();
	}

	public static function update(Emplacements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE emplacements SET idEmplacement=:idEmplacement,numeroEmplacement=:numeroEmplacement,idSalle=:idSalle WHERE idEmplacement=:idEmplacement");
		$q->bindValue(":idEmplacement", $obj->getIdEmplacement());
		$q->bindValue(":numeroEmplacement", $obj->getNumeroEmplacement());
		$q->bindValue(":idSalle", $obj->getIdSalle());
		$q->execute();
	}
	public static function delete(Emplacements $obj)
	{
		$listeAnimateurs = AnimateursManager::getByEmplacement($obj->getIdEmplacement());
		foreach ($listeAnimateurs as $unAnimateur)
		{
			AnimateursManager::delete($unAnimateur);
		}
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM emplacements WHERE idEmplacement=" .$obj->getIdEmplacement());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM emplacements WHERE idEmplacement =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Emplacements($results);
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
		$q = $db->query("SELECT * FROM emplacements");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Emplacements($donnees);
			}
		}
		return $liste;
	}

	public static function getByConvention($idConvention)
	{
		$conv=ConventionsManager::findById($idConvention);
		 $db=DbConnect::getDb();
		 $idConvention = (int) $idConvention;
		$liste = [];
		$q =$db->query("SELECT * FROM Emplacements where idSalle= ".$conv->getIdSalle());
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Emplacements($donnees);
			}
		}
		return $liste;
	}

	public static function getBySalle($idSalle)
	{
		 $db=DbConnect::getDb();
		 $idSalle = (int) $idSalle;
		$liste = [];
		$q =$db->query("SELECT * FROM Emplacements where idSalle= ".$conv->getIdSalle());
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Emplacements($donnees);
			}
		}
		return $liste;
	}

}