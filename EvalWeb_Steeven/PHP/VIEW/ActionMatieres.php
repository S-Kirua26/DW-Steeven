<?php

$mode = $_GET['mode'];

$obj = new Matieres($_POST);

switch ($mode) {
    case "ajouter":
        {
            MatieresManager::add($obj);
            break;
        }
    case "modifier":
        {

            MatieresManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=MatieresManager::findById($idRecherche);
            MatieresManager::delete($id);
            break;
        }
}