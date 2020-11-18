<?php
include "personne.Class.php";
include "ClassAgence.php";
include "ClassEnfants.php";

$agence[0] = new Agence(["nomAgence" => "PôleEmploi", "adresse" => "54 rue Jean-Michel Pluton", "codePostal" => "62352", "ville" => "Cramberry", "restauration" => "non donc tickets restaurant pour l'employé"]);
// echo $agence[0]->toString();
$agence[1] = new Agence(["nomAgence" => "Cemoi", "adresse" => "34 avenue Jeorges Simon", "codePostal" => "85421", "ville" => "Beaufort", "restauration" => "oui donc pas de tickets restaurant"]);
// echo $agence[1]->toString();

$enfant[0] = new Enfants(["nomEnfant" => "Patrie", "prenomEnfant" => "Moniale", "ageEnfant" => 15]);
$enfant[1] = new Enfants(["nomEnfant" => "Pouli", "prenomEnfant" => "Jacques", "ageEnfant" => 10]);

$personnes[]=new Personne(["id"=>0,"nom"=>"Duchemin","prenom"=>"Lucas","datembauche"=>new DateTime('2014-05-10'),"poste" => "vendeur","salaire" => "2200","agence"=> $agence[0],"service"=> "Comptabilité","enfants" => [$enfant[0]]]);
$personnes[]=new Personne(["id"=>1,"nom"=>"Ducoin","prenom"=>"Ludovic","datembauche"=>new DateTime('2017-06-14'),"poste" => "cariste","salaire" => "1800","agence"=> $agence[1],"service" => "Commercial","enfants" => [$enfant[1]]]);
$personnes[]=new Personne(["id"=>2,"nom"=>"Marc","prenom"=>"Isabelle","datembauche"=>new DateTime('2008-01-05'),"poste" => "developpeur","salaire" => "3600","agence"=> $agence[1],"service" => "commercial","enfants" => [$enfant[1]]]);
$personnes[]=new Personne(["id"=>3,"nom"=>"Dupont","prenom"=>"Eliot","datembauche"=>new DateTime('2010-12-08'),"poste" => "agent immobilier","salaire" => "2400","agence"=> $agence[0],"service" => "Comptabilité","enfants" => [$enfant[0]]]);

