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
            if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==1)
            {
                $idRecherche=$_GET['id'];
                $id=ClientsManager::findById($idRecherche);
                break;
            }
            if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==2)
            {
                $idRecherche=$_GET['id'];
                $id=ClientsManager::findById($idRecherche);
                ClientsManager::delete($id);
                break;
            }

        }
}