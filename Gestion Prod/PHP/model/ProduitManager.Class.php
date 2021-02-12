<?php
class ProduitManager
{
public static function add(Produit $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO produits (nomProduit,type,idLot,dateHeure,reference,idProduction,idReference) VALUES (:nomProduit,:type,:idLot,:dateHeure,:reference,:idProduction,:idReference)");
$q->bindValue(":nomProduit", $obj->getNomProduit());
$q->bindValue(":type", $obj->getType());
$q->bindValue(":idLot", $obj->getIdLot());
$q->bindValue(":dateHeure", $obj->getDateHeure());
$q->bindValue(":reference", $obj->getReference());
$q->bindValue(":idProduction", $obj->getIdProduction());
$q->bindValue(":idReference", $obj->getIdReference());
 $q->execute();
}

public static function update(Produit $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE produits SET nomProduit=:nomProduit, type=:type, idLot=:idLot, dateHeure=:dateHeure, reference=:reference, idProduction=:idProduction, idReference=:idReference WHERE idProduit=:idProduit");
$q->bindValue(":nomProduit", $obj->getNomProduit());
$q->bindValue(":type", $obj->getType());
$q->bindValue(":idLot", $obj->getIdLot());
$q->bindValue(":dateHeure", $obj->getDateHeure());
$q->bindValue(":reference", $obj->getReference());
$q->bindValue(":idProduction", $obj->getIdProduction());
$q->bindValue(":idReference", $obj->getIdReference());
$q->bindValue(":id", $obj->getIdProduit());
 $q->execute();
}

public static function delete(Produit $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM produits WHERE idProduit=" . $obj->getIdProduit());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM produits WHERE idProduit=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Produit ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$produits = [];
$q = $db->query("SELECT * FROM produits");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$produits[] = new Produit($donnees);
}
}
return $produits;
 }

}