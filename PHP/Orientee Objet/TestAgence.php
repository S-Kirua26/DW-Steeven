<?php

require "ClassAgence.php";
require "ClassEmploye.php";
require "ClassEnfants.php";

$agence[0] = new Agence(["nomAgence" => "PôleEmploi", "adresse" => "54 rue Jean-Michel Pluton", "codePostal" => "62352", "ville" => "Cramberry", "restauration" => "non donc tickets restaurant pour l'employé"]);
// echo $agence[0]->toString();
$agence[1] = new Agence(["nomAgence" => "Cemoi", "adresse" => "34 avenue Jeorges Simon", "codePostal" => "85421", "ville" => "Beaufort", "restauration" => "oui donc pas de tickets restaurant"]);
// echo $agence[1]->toString();
$agence[2] = new Agence(["nomAgence" => "RetroGaming", "adresse" => "10 rue de la place", "codePostal" => "96521", "ville" => "Poiron", "restauration" => "non donc tickets restaurant pour l'employé"]);
// echo $agence[2]->toString();

// $enfants[0] = new Enfants

$enfant[0] = new Enfants(["nomEnfant" => "Patrie", "prenomEnfant" => "Moniale", "ageEnfant" => 15]);
$enfant[1] = new Enfants(["nomEnfant" => "Pouli", "prenomEnfant" => "Jacques", "ageEnfant" => 10]);
$enfant[2] = new Enfants(["nomEnfant" => "Rocra", "prenomEnfant" => "Melon", "ageEnfant" => 16]);
$enfant[3] = new Enfants(["nomEnfant" => "Tranquil", "prenomEnfant" => "Leman", "ageEnfant" => 5]);
$enfant[4] = new Enfants(["nomEnfant" => "Ferra", "prenomEnfant" => "Ricodé", "ageEnfant" => 3]);

$employe[0] = new Employe(["nom" => "Pavu", "prenom" => "Paprika", "datembauche" => new DateTime('2014-05-10'), "fonction" => "vendeur", "salaire" => "2200", "service" => "commercial", "agence" => $agence[0], "enfants" => [$enfant[1]]]);
echo $employe[0]->toString();
$employe[1] = new Employe(["nom" => "Pruvost", "prenom" => "Christian", "datembauche" => new DateTime('1984-07-11'), "fonction" => "cariste", "salaire" => "1850", "service" => "transport", "agence" => $agence[1], "enfants" => [$enfant[2],$enfant[3]]]);
echo $employe[1]->toString();
$employe[2] = new Employe(["nom" => "Gradis", "prenom" => "Lilian", "datembauche" => new DateTime('2019-03-05'), "fonction" => "développeur", "salaire" => "2500", "service" => "informatique","agence" => $agence[2], "enfants"=>[$enfant[1],$enfant[4]]]);
echo $employe[2]->toString();
