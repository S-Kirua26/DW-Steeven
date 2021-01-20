<?php

$mode = $_GET['mode'];
$tuteur = new Tuteurs($_POST);
$entreprise = new Entreprises($_POST);

switch($mode)
{
    case "ajouter":
    {
        TuteursManager::add($tuteur);
        EntreprisesManager::add($entreprise);
        break;
    }

    case "modifier":
    {
        TuteursManager::update($tuteur);
        EntreprisesManager::update($entreprise);
        break;
    }
}