<?php

$mode = $_GET['mode'];

$obj = new Eleves($_POST);

switch ($mode) {
    case "ajouter":
        {
            ElevesManager::add($obj);
            break;
        }
    case "modifier":
        {

            ElevesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=ElevesManager::findById($idRecherche);
            ElevesManager::delete($id);
            break;
        }
}