<?php

class VentesManager 
{
	public static function add(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO ventes (IdRepres,IdProduit,IdClient,Quantite) VALUES (:IdRepres,:IdProduit,:IdClient,:Quantite)");
		$q->bindValue(":IdRepres", $obj->getIdRepres());
		$q->bindValue(":IdProduit", $obj->getIdProduit());
		$q->bindValue(":IdClient", $obj->getIdClient());
		$q->bindValue(":Quantite", $obj->getQuantite());
		$q->execute();
	}

	public static function update(Ventes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE ventes SET IdVente=:IdVente,IdRepres=:IdRepres,IdProduit=:IdProduit,IdClient=:IdClient,Quantite=:Quantite WHERE IdVente=:IdVente");
		$q->bindValue(":IdVente", $obj->getIdVente());
		$q->bindValue(":IdRepres", $obj->getIdRepres());
        $q->bindValue(":IdProduit", $obj->getIdProduit());
        $q->bindValue(":IdClient", $obj->getIdClient());
        $q->bindValue(":Quantite", $obj->getQuantite());
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

	public static function getListByRepresentant(Representants $representant)
	{
		$id=(int) $representant->getIdRepres();
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM ventes WHERE idRepres=$id");
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