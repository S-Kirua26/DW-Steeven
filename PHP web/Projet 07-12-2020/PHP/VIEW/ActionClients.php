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
            $test = ClientsManager::delete($obj);
            break;
        }
}