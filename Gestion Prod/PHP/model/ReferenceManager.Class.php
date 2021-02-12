<?php
class ReferenceManager
{
public static function add(Reference $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO reference (nomReference) VALUES (:nomReference)");
$q->bindValue(":nomReference", $obj->getNomReference());
 $q->execute();
}

public static function update(Reference $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE reference SET nomReference=:nomReference WHERE idReference=:idReference");
$q->bindValue(":nomReference", $obj->getNomReference());
$q->bindValue(":id", $obj->getIdReference());
 $q->execute();
}

public static function delete(Reference $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM reference WHERE idReference=" . $obj->getIdReference());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM reference WHERE idReference=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Reference ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$reference = [];
$q = $db->query("SELECT * FROM reference");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$reference[] = new Reference($donnees);
}
}
return $reference;
 }

}