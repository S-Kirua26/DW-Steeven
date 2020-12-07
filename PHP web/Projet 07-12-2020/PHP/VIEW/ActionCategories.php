<?php

$mode=$_GET['mode'];
var_dump($_POST);
$cat=new Categories($_POST);

switch($mode){
    case "ajouter":
    {
        CategoriesManager::add($cat);
        break;
    }
    case "modifier":
    {
            CategoriesManager::update($cat);
            break;
    }
    case "supprimer":
    {
        $listeProduits = ProduitsManager::getListByCategorie($cat);
        foreach($listeProduits as $unProduit)
        {
            $unProduit->setIdCategorie(1);
            ProduitsManager::update($unProduit);
        }
        CategoriesManager::delete($cat);
        break;
    }
}