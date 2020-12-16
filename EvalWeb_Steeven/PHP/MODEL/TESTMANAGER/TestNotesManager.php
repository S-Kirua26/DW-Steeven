<?php

//Test NotesManager

echo "recherche id = 1" . "<br>";
$obj =NotesManager::findById(1);
var_dump($obj);
echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Notes(["nomClient" => "test2", "villeClient" => "test2"]);
// var_dump(NotesManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = NotesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setNomClient("[(Value)]");
// NotesManager::update($obj);
// $objUpdated = NotesManager::findById(6);
// echo "Liste des objets" . "<br>";
// $array = NotesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = NotesManager::findById(6);
// NotesManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = NotesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

?>