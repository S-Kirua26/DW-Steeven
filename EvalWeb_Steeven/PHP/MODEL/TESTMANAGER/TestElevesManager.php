<?php

//Test ElevesManager

echo "recherche id = 1" . "<br>";
$obj =ElevesManager::findById(1);
var_dump($obj);
echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Eleves(["nomClient" => "test2", "villeClient" => "test2"]);
// var_dump(ElevesManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = ElevesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setNomClient("[(Value)]");
// ElevesManager::update($obj);
// $objUpdated = ElevesManager::findById(6);
// echo "Liste des objets" . "<br>";
// $array = ElevesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = ElevesManager::findById(6);
// ElevesManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = ElevesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

?>