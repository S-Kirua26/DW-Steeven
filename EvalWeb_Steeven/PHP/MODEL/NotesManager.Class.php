<?php

class NotesManager 
{
	public static function add(Notes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO notes (nomEleve,prenomEleve,noteObtenue) VALUES (:nomEleve,:prenomEleve,:noteObtenue)");
        $q->bindValue(":nomEleve", $obj->getNomEleve());
        $q->bindValue(":prenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":noteObtenue", $obj->getNoteObtenue());
		$q->execute();
	}

	public static function update(Notes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE notes SET idNote=:idNote,nomEleve=:nomEleve,prenomEleve=:prenomEleve,noteObtenue=:noteObtenue WHERE idNote=:idNote");
        $q->bindValue(":idNotes", $obj->getIdNote());
        $q->bindValue(":nomEleve", $obj->getNomEleve());
		$q->bindValue(":prenomEleve", $obj->getPrenomEleve());
		$q->bindValue(":noteObtenue", $obj->getNoteObtenue());
		$q->execute();
	}

	public static function delete(Notes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM notes WHERE idNote=" .$obj->getIdNote());
	}

	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM notes WHERE idNote =".$id);
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
		$q = $db->query("SELECT * FROM notes");
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