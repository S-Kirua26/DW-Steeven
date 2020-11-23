<?php

include "PHP/VUE/head.php";
include "PHP/VUE/header.php";

// on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = ProduitsManager::findById(1);
// var_dump($p);

//on affiche la liste des produits
// echo "Liste des article" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

// on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setLibelleProduit($p->getLibelleProduit() . 'XXL');
// ProduitsManager::update($p);
// $pRecharge = ProduitsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article" . '<br>';
// $pSuppr = ProduitsManager::findById(3);
// ProduitsManager::delete($pSuppr);

// // //on affiche la liste des produits
// echo "liste des articles" . '<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

//////////////////////////////////////////////////// CLIENTS //////////////////////////////////////////////////////

// on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = ClientsManager::findById(1);
// var_dump($p);

//on affiche la liste des produits
// echo "Liste des personnes" . '<br>';
// $tableau = ClientsManager::getList();
// foreach ($tableau as $unClient)
// {
//     echo $unClient->toString() . '<br>';
// }

// on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setnomClient($p->getNomClient() . 'XXL');
// ClientsManager::update($p);
// $pRecharge = ClientsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime une personne" . '<br>';
// $pSuppr = ClientsManager::findById(2);
// ClientsManager::delete($pSuppr);

// // //on affiche la liste des produits
// echo "liste des clients" . '<br>';
// $tableau = ClientsManager::getList();
// foreach ($tableau as $unClient)
// {
//     echo $unClient->toString() . '<br>';
// }

include "PHP/VUE/footer.php";