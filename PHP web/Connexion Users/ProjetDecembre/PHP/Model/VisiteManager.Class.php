<?php

class VisiteManager
{
	public static function add(Visite $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO visite (dateVisite,idVisiteur,idConvention) VALUES (:dateVisite,;idVisiteur,:idConvention)");
		$q->bindValue(":dateVisite", $obj->getDateVisite());
		$q->bindValue(":idVisiteur", $obj->getIdVisiteur());
		$q->bindValue(":idConvention", $obj->getIdConvention());
		$q->execute();
	}

	public static function update(Visite $obj)
	{
 		$db=DbConnect::getDb();
        $q=$db->prepare("UPDATE visite SET idVisite=:idVisite,dateVisite=:dateVisite,idVisteur=:idVisiteur,idConvention=:idConvention WHERE idVisite=:idVisite");
        $q->bindValue(":idVisite", $obj->getIdVisite());
		$q->bindValue(":dateVisite", $obj->getDateVisite());
		$q->bindValue(":idVisiteur", $obj->getIdVisiteur());
		$q->bindValue(":idConvention", $obj->getIdConvention());
		$q->execute();
	}
	public static function delete(Visite $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM visite WHERE idVisite=" .$obj->getIdVisite());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM visite WHERE idVisite =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Visite($results);
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
		$q = $db->query("SELECT * FROM visite");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Visite($donnees);
			}
		}
		return $liste;
	}
}