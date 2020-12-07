<?php

$mode = $_GET['mode'];

$obj = new Representants($_POST);

switch ($mode) {
    case "ajouter":
        {
            RepresentantsManager::add($obj);
            break;
        }
    case "modifier":
        {

            RepresentantsManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $test = RepresentantsManager::delete($obj);
            break;
        }
}