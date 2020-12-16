<?php

//Test EnseignantsManager

echo "recherche id = 1" . "<br>";
$obj =EnseignantsManager::findById(1);
var_dump($obj);
echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Enseignants(["nomClient" => "test2", "villeClient" => "test2"]);
// var_dump(EnseignantsManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = EnseignantsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setNomClient("[(Value)]");
// EnseignantsManager::update($obj);
// $objUpdated = EnseignantsManager::findById(6);
// echo "Liste des objets" . "<br>";
// $array = EnseignantsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = EnseignantsManager::findById(6);
// EnseignantsManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = EnseignantsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

?>