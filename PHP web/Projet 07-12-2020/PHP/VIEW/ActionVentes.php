<?php

$mode = $_GET['mode'];

$obj = new Ventes($_POST);

switch ($mode) {
    case "ajouter":
        {
            VentesManager::add($obj);
            break;
        }
    case "modifier":
        {

            VentesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=VentesManager::findById($idRecherche);
            VentesManager::delete($id);
            break;
        }
}