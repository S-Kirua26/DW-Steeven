<?php

class DepartementManager
{
	static public function add(Departement $departement)
	{
		$db = DbConnect::getDb(); 
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO departement(libelleDepartement, idRegion) VALUES(:libelleDepartement, idRegion)');
	
        $q->bindValue(':libelleDepartement', $departement->getLibelleDepartement());
        $q->bindValue(':idRegion', $departement->getIdRegion());
		$q->execute();
	}
	
	static public function delete(Departement $departement)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM departements WHERE idDepartement = '.$departement->getIdDepartement());
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Departement
	 */
	static public function getById($id,$api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Departement.
		$id = (int) $id;
		
		$q = $db->query('SELECT idDepartement, libelleDepartement, idRegion FROM departements WHERE idDepartement = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		if ($api)  return $donnees;
		return new Departement($donnees);
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Departement
	 */
	static public function getList($api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les Departements.
		
		$q = $db->query('SELECT idDepartement, libelleDepartement, idRegion FROM departements ORDER BY idRegion');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$departement[] = new Departement($donnees);
			$json[]=$donnees;
		}
		if (!$api)  return $departement;
		return $json;
	}
	
	
	static public function update(Departement $departement)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE departements SET libelleDepartement=:libelleDepartement, idRegion=:idRegion WHERE idDepartement = :idDepartement');
		
        $q->bindValue(':libelleDepartement', $departement->getLibelleDepartement());
        $q->bindValue(':idRegion', $departement->getIdRegion());
		$q->execute();
	}
	
	static public function count()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les departements.
		
		$q = $db->query('SELECT count(*) as nb FROM departements');
		
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return $donnees;
	}

	static public function getListeDepartement($api, $idRegion)
	{
		$id = (int) $idRegion;
		$db = DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT libelleDepartement FROM departements WHERE idRegion=$id");

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{

			}
		}
	}
	
}