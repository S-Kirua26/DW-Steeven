<?php

//Test ClientsManager

echo "recherche id = 1" . "<br>";
$obj =ClientsManager::findById(1);
var_dump($obj);
echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Clients(["nomClient" => "test2", "villeClient" => "test2"]);
// var_dump(ClientsManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = ClientsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setNomClient("[(Value)]");
// ClientsManager::update($obj);
// $objUpdated = ClientsManager::findById(6);
// echo "Liste des objets" . "<br>";
// $array = ClientsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = ClientsManager::findById(6);
// ClientsManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = ClientsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

?>