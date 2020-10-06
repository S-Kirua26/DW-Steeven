<?php

require "ClassAgence.php";

$agence1 = new Agence(["nomAgence" => "PôleEmploi", "adresse" => "54 rue Jean-Michel Pluton", "codePostal" => "62352", "ville" => "Cramberry"]);
echo $agence1->toString();
$agence2 = new Agence(["nomAgence" => "Cemoi", "adresse" => "34 avenue Jeorges Simon", "codePostal" => "85421", "ville" => "Beaufort"]);
echo $agence2->toString();
$agence3 = new Agence(["nomAgence" => "RetroGaming", "adresse" => "10 rue de la place ", "codePostal" => "96521", "ville" => "Poiron"]);
echo $agence3->toString();

?>