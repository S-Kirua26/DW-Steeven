<?php

class AnimateursManager
{
	public static function add(Animateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Animateurs (nomAnimateur,prenomAnimateur,titreAnimateur, dateDebut, dateFin, idEmplacement ) VALUES (:nomAnimateur, :prenomAnimateur, :titreAnimateur, :dateDebut, :dateFin, :idEmplacement)");
        $q->bindValue(":nomAnimateur", $obj->getNomAnimateur());
        $q->bindValue(":prenomAnimateur", $obj->getPrenomAnimateur());
		$q->bindValue(":titreAnimateur", $obj->getTitreAnimateur());
		$q->bindValue(":dateDebut", $obj->getDateDebut());
		$q->bindValue(":dateFin", $obj->getDateFin());
		$q->bindValue(":idEmplacement", $obj->getIdEmplacement());
		$q->execute();
	}

	public static function update(Animateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Animateurs SET idAnimateur=:idAnimateur,nomAnimateur=:nomAnimateur,prenomAnimateur=:prenomAnimateur,titreAnimateur=:titreAnimateur WHERE idAnimateur=:idAnimateur");
		$q->bindValue(":idAnimateur", $obj->getIdAnimateur());
        $q->bindValue(":nomAnimateur", $obj->getNomAnimateur());
        $q->bindValue(":prenomAnimateur", $obj->getPrenomAnimateur());
        $q->bindValue(":titreAnimateur", $obj->getTitreAnimateur());
		$q->execute();
	}
	public static function delete(Animateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Animateurs WHERE idAnimateur=" .$obj->getIdAnimateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Animateurs WHERE idAnimateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Animateurs($results);
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
		$q = $db->query("SELECT * FROM Animateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Animateurs($donnees);
			}
		}
		return $liste;
	}

	public static function getByEmplacement($idEmplacement)
	{
		$db=DbConnect::getDb();
		$idEmplacement = (int) $idEmplacement;
		$liste=[];
		$q =$db->query("SELECT * FROM Animateurs where idEmplacement= $idEmplacement");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] =new Animateurs($donnees);
			}
		}
		return $liste;
	}
}