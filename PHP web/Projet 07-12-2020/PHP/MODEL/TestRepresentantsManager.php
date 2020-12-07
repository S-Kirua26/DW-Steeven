<?php

//Test RepresentantsManager

echo "recherche id = 1" . "<br>";
$obj =RepresentantsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Representants(["nomRepresentant" => "test2", "villeRepresentant" => "test2"]);
var_dump(RepresentantsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = RepresentantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 6" . "<br>";
$obj->setNomRepresentant("[(Value)]");
RepresentantsManager::update($obj);
$objUpdated = RepresentantsManager::findById(6);
echo "Liste des objets" . "<br>";
$array = RepresentantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = RepresentantsManager::findById(6);
RepresentantsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = RepresentantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>