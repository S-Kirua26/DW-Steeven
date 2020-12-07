<?php

class RepresentantsManager 
{
	public static function add(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO representants (nomRepresentant,villeRepresentant) VALUES (:nomRepresentant,:villeRepresentant)");
		$q->bindValue(":nomRepresentant", $obj->getNomRepresentant());
		$q->bindValue(":villeRepresentant", $obj->getVilleRepresentant());
		$q->execute();
	}

	public static function update(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE representants SET idRepresentant=:idRepresentant,nomRepresentant=:nomRepresentant,villeRepresentant=:villeRepresentant WHERE idRepresentant=:idRepresentant");
		$q->bindValue(":idRepresentant", $obj->getIdRepresentant());
		$q->bindValue(":nomRepresentant", $obj->getNomRepresentant());
		$q->bindValue(":villeRepresentant", $obj->getVilleRepresentant());
		$q->execute();
	}
	public static function delete(Representants $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM representants WHERE idRepresentant=" .$obj->getIdRepresentant());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM representants WHERE idRepresentant =".$id);
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