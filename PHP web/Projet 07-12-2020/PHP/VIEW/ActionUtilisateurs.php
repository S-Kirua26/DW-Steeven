<?php

$mode = $_GET['mode'];

$obj = new Utilisateurs($_POST);

switch ($mode) {
    case "ajouter":
        {
            UtilisateursManager::add($obj);
            break;
        }
    case "modifier":
        {

            UtilisateursManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $test = UtilisateursManager::delete($obj);
            break;
        }
}