<?php

class VentesManager 
{
	public static function add(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO ventes (idClient,idRepresentant,idProduit,quantite) VALUES (:idClient,:idRepresentant;:idProduit,:quantite)");
		$q->bindValue(":idClient", $obj->getIdClient());
        $q->bindValue(":idRepresentant", $obj->getIdRepresentant());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->bindValue(":quantite", $obj->getQuantite());
		$q->execute();
	}

	public static function update(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE ventes SET idVente=:idVente,idClient=:idClient,idRepresentant=:idRepresentant,idProduit=:idProduit,quantite=:quantite WHERE idVente=:idVente");
		$q->bindValue(":idProduit", $obj->getIdVente());
		$q->bindValue(":idClient", $obj->getIdClient());
        $q->bindValue(":idRepresentant", $obj->getIdRepresentant());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->bindValue(":quantite", $obj->getQuantite());
		$q->execute();
	}
	public static function delete(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM ventes WHERE idVente=" .$obj->getIdVente());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM ventes WHERE idVente =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Ventes($results);
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
		$q = $db->query("SELECT * FROM ventes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Ventes($donnees);
			}
		}
		return $liste;
	}
}