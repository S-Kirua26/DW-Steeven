<?php

class EnseignantsManager 
{
	public static function add(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO enseignants (libelleMatiere,nomEnseignant,prenomEnseignant,pseudoEnseignant) VALUES (:libelleMatiere,:nomEnseignant,:prenomEnseignant,pseudoEnseignant)");
        $q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
        $q->bindValue(":nomEnseignant", $obj->getNomEnseignant());
		$q->bindValue(":prenomEnseignant", $obj->getPrenomEnseignant());
		$q->bindValue(":pseudoEnseignant", $obj->getPseudoEnseignant());
		$q->execute();
	}

	public static function update(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE enseignants SET idEnseignant=:idEnseignant,libelleMatiere=:libelleMatiere,nomEnseignant=:nomEnseignant,prenomEnseignant=:prenomEnseignant,pseudoEnseignant=:pseudoEnseignant WHERE idEnseignant=:idEnseignant");
        $q->bindValue(":idEnseignant", $obj->getIdEnseignant());
        $q->bindValue(":libelleMatiere", $obj->getLibelleMatiere());
		$q->bindValue(":nomEnseignant", $obj->getNomEnseignant());
		$q->bindValue(":prenomEnseignant", $obj->getPrenomEnseignant());
		$q->bindValue(":pseudoEnseignant", $obj->getPseudoEnseignant());
		$q->execute();
	}

	public static function delete(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM enseignants WHERE idEnseignant=" .$obj->getIdEnseignant());
	}

	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM enseignants WHERE idEnseignant =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Enseignants($results);
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
		$q = $db->query("SELECT * FROM enseignants");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Enseignants($donnees);
			}
		}
		return $liste;
	}
}