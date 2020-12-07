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
            $test = VentesManager::delete($obj);
            break;
        }
}