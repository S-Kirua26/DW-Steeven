<?php

$mode = $_GET['mode'];

$obj = new Enseignants($_POST);

switch ($mode) {
    case "ajouter":
        {
            EnseignantsManager::add($obj);
            break;
        }
    case "modifier":
        {

            EnseignantsManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=EnseignantsManager::findById($idRecherche);
            EnseignantsManager::delete($id);
            break;
        }
}