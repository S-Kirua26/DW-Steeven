<?php

$mode = $_GET['mode'];

$obj = new Clients($_POST);

switch ($mode) {
    case "ajouter":
        {
            ClientsManager::add($obj);
            break;
        }
    case "modifier":
        {

            ClientsManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=ClientsManager::findById($idRecherche);
            ClientsManager::delete($id);
            break;
        }
}