<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO utilisateurs (nomUtilisateur,loginUtilisateur,prenomUtilisateur,motDePasseUtilisateur,idRole) VALUES (:nomUtilisateur,:loginUtilisateur,:prenomUtilisateur,:motDePasseUtilisateur,:idRole)");
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":loginUtilisateur", $obj->getLoginUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,loginUtilisateur=:loginUtilisateur,prenomUtilisateur=:prenomUtilisateur,,motDePasseUtilisateur=:motDePasseUtilisateur,idRole=:idRole WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":nomUtilisateur", $obj->getnomUtilisateur());
		$q->bindValue(":login", $obj->getLoginUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getprenomUtilisateur());
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

	public static function findByPseudo($login)
	{
		 $db=DbConnect::getDb();
		 if (!in_array(";",str_split($login)))
		 {
			$q=$db->query("SELECT * FROM utilisateurs WHERE loginUtilisateur ='" . $login . "'");
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
	}
}