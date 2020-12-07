<?php

$mode = $_GET['mode'];

$obj = new Produits($_POST);

switch ($mode) {
    case "ajouter":
        {
            ProduitsManager::add($obj);
            break;
        }
    case "modifier":
        {

            ProduitsManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $test = ProduitsManager::delete($obj);
            break;
        }
}