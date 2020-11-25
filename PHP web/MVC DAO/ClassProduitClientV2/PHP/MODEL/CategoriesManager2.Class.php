<?php

class CategoriesManager2 
{
	public static function add(Categories2 $obj)
	{
 		$db=DbConnect2::getDb();
		$q=$db->prepare("INSERT INTO categories (libelleCategorie) VALUES (:libelleCategorie)");
		$q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
		$q->execute();
	}

	public static function update(Categories2 $obj)
	{
 		$db=DbConnect2::getDb();
		$q=$db->prepare("UPDATE categories SET idCategorie=:idCategorie,libelleCategorie=:libelleCategorie WHERE idCategorie=:idCategorie");
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
		$q->execute();
	}
	public static function delete(Categories2 $obj)
	{
 		$db=DbConnect2::getDb();
		$db->exec("DELETE FROM categories WHERE idCategorie=" .$obj->getIdCategorie());
	}
	public static function findById($id)
	{
 		$db=DbConnect2::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM categories WHERE idCategorie =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Categories2($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect2::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM categories");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Categories2($donnees);
			}
		}
		return $liste;
	}
}