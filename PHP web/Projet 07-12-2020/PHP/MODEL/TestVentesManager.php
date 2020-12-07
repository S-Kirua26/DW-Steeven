<?php

//Test VentesManager

echo "recherche id = 1" . "<br>";
$obj =VentesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Ventes(["idClient" => 1, "idProduit" => 1, "idRepresentant"=> 1, "quantite" => 1]);
var_dump(VentesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = VentesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 5" . "<br>";
$obj->setIdProduit("[3]");
VentesManager::update($obj);
$objUpdated = VentesManager::findById(5);
echo "Liste des objets" . "<br>";
$array = VentesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = VentesManager::findById(5);
VentesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = VentesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>