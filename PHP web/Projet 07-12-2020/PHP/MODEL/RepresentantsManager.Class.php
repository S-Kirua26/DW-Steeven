<?php

class RepresentantsManager 
{
	public static function add(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO representants (nomRepres,villeRepres) VALUES (:nomRepres,:villeRepres)");
		$q->bindValue(":nomRepres", $obj->getNomRepres());
		$q->bindValue(":villeRepres", $obj->getVilleRepres());
		$q->execute();
	}

	public static function update(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE representants SET idRepres=:idRepres,nomRepres=:nomRepres,villeRepres=:villeRepres WHERE idRepres=:idRepres");
		$q->bindValue(":idRepres", $obj->getIdRepres());
		$q->bindValue(":nomRepres", $obj->getNomRepres());
		$q->bindValue(":villeRepres", $obj->getVilleRepres());
		$q->execute();
	}
	public static function delete(Representants $obj)
	{
		$db=DbConnect::getDb();
		// $db->exec("UPDATE ventes SET idRepres=7 WHERE idRepres=".$obj->getIdRepres());
		$db->exec("DELETE FROM representants WHERE idRepres=" .$obj->getIdRepres());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM representants WHERE idRepres =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Representants($results);
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
		$q = $db->query("SELECT * FROM representants");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Representants($donnees);
			}
		}
		return $liste;
	}
}