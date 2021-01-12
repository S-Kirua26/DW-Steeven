<?php

class RegionManager
{
	static public function add(Region $region)
	{
		$db = DbConnect::getDb(); 
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO regions(libelleRegion) VALUES(:libelleRegion)');
	
		$q->bindValue(':libelleRegion', $region->getLibelleRegion());
		$q->execute();
		
	}
	
	static public function delete(Region $region)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM regions WHERE idRegion = '.$region->getIdRegion());
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Regions
	 */
	static public function getById($id,$api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Region.
		$id = (int) $id;
		
		$q = $db->query('SELECT idRegion, libelleRegion FROM regions WHERE idRegion = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		if ($api)  return $donnees;
		return new Region($donnees);
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Region
	 */
	static public function getList($api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les Regions.
		
		$q = $db->query('SELECT idRegion, libelleRegion FROM regions ORDER BY libelleRegion');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$region[] = new Region($donnees);
			$json[]=$donnees;
		}
		if (!$api)  return $region;
		return $json;
	}
	
	
	static public function update(Region $region)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE regions SET libelleRegion=:libelleRegion WHERE idRegion = :idRegion');
		
		$q->bindValue(':libelleRegion', $region->getLibelleRegion());
		$q->execute();
	}
	
	static public function count()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les regions.
		
		$q = $db->query('SELECT count(*) as nb FROM regions');
		
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return $donnees;
	}
	
}