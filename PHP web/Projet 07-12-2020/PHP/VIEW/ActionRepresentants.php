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
            $listeVentes=VentesManager::getListByRepresentant($obj);
            var_dump($listeVentes);
            foreach ($listeVentes as $uneVente)
            {
                $uneVente->setIdRepres(7);
                VentesManager::update($uneVente);
            }
                RepresentantsManager::delete($obj);
            break;
        }
}