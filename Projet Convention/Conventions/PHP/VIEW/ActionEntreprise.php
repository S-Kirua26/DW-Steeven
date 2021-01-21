<?php

$mode = $_GET['mode'];
$tuteur = new Tuteurs($_POST);

$entreprise = new Entreprises($_POST);
EntreprisesManager::add($entreprise);

$infosTuteur = TuteursManager::getByEntreprise($tuteur->getIdTuteur());
TuteursManager::add($infostuteur);


    // case "modifier":
    // {
    //     TuteursManager::update($tuteur);
    //     EntreprisesManager::update($entreprise);
    //     break;
    // }
}