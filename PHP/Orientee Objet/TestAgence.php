<?php

require "ClassAgence.php";
require "ClassEmploye.php";
require "ClassEnfants.php";

$agence[0] = new Agence(["nomAgence" => "PôleEmploi", "adresse" => "54 rue Jean-Michel Pluton", "codePostal" => "62352", "ville" => "Cramberry", "restauration" => "non donc tickets restaurant pour l'employé"]);
// echo $agence[0]->toString();
$agence[1] = new Agence(["nomAgence" => "Cemoi", "adresse" => "34 avenue Jeorges Simon", "codePostal" => "85421", "ville" => "Beaufort", "restauration" => "oui donc pas de tickets restaurant"]);
// echo $agence[1]->toString();
$agence[2] = new Agence(["nomAgence" => "RetroGaming", "adresse" => "10 rue de la place ", "codePostal" => "96521", "ville" => "Poiron", "restauration" => "non donc tickets restaurant pour l'employé"]);
// echo $agence[2]->toString();

$employe[0] = new Employe(["nom" => "Pavu", "prenom" => "Paprika", "datembauche" => new DateTime('2014-05-10'), "fonction" => "vendeur", "salaire" => "2200", "service" => "commercial", "enfants" => "1", "agence" => $agence[0]]);
echo $employe[0]->toString();
$employe[1] = new Employe(["nom" => "Pruvost", "prenom" => "Christian", "datembauche" => new DateTime('1984-07-11'), "fonction" => "cariste", "salaire" => "1850", "service" => "transport", "enfants" => "1", "agence" => $agence[1]]);
echo $employe[1]->toString();
$employe[2] = new Employe(["nom" => "Gradis", "prenom" => "Lilian", "datembauche" => new DateTime('2019-03-05'), "fonction" => "développeur", "salaire" => "2500", "service" => "informatique", "enfants" => "1", "agence" => $agence[2]]);
echo $employe[2]->toString();
