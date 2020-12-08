<?php

$mode = $_GET['mode'];

$obj = new Produits($_POST);

switch ($mode) {
    case "ajouter":
        {
            ProduitsManager::add($obj);
            break;
        }
    case "rechercher":
        {
            ProduitsManager::research($obj);
        }
    case "modifier":
        {

            ProduitsManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=ProduitsManager::findById($idRecherche);
            ProduitsManager::delete($id);
            break;
        }
}