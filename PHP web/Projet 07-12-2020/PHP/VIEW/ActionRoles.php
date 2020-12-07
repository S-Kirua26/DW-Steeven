<?php

$mode = $_GET['mode'];

$obj = new Roles($_POST);

switch ($mode) {
    case "ajouter":
        {
            RolesManager::add($obj);
            break;
        }
    case "modifier":
        {

            RolesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $test = RolesManager::delete($obj);
            break;
        }
}