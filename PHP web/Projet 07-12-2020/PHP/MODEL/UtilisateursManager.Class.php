<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,ageUtilisateur,pseudoUtilisateur,motDePasseUtilisateur,idRole) VALUES (:nomUtilisateur;:prenomUtilisatuer,:ageUtilisateur,:pseudoUtilisateur,:motDePasseUtilisateur,:idRole)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":ageUtilisateur", $obj->getAgeUtilisateur());
		$q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
		$q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,ageUtilisateur=:ageUtilisateur,pseudoUtilisateur=:pseudoUtilisateur,motDePasseUtilisateur=:motDePasseUtilisateur,idRole=:idRole WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getnomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getprenomUtilisateur());
		$q->bindValue(":ageUtilisateur", $obj->getageUtilisateur());
		$q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
		$q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM utilisateurs WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
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
		$q = $db->query("SELECT * FROM utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}
}