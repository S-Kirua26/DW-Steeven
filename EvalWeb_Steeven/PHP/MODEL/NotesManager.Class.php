<?php

class NotesManager 
{
	public static function add(Notes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO enseignants (nomEleve,prenomEleve,noteObtenue) VALUES (:nomEleve,:prenomEleve,:noteObtenue)");
        $q->bindValue(":nomEleve", $obj->getNomEleve());
        $q->bindValue(":prenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":noteObtenue", $obj->getNoteObtenue());
		$q->execute();
	}

	public static function update(Notes $obj)
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

	public static function delete(Notes $obj)
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
			return new Notes($results);
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
				$liste[] = new Notes($donnees);
			}
		}
		return $liste;
	}
}