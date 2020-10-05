<?php

require "ClassEmploye.php";

$employe1 = new Employe(["nom" => "Pavu", "prenom" => "Paprika", "datembauche" => "2014", "fonction" => "vendeur", "salaire" => "2200", "service" => "commercial"]);
echo $employe1 -> toString();
$employe2 = new Employe(["nom" => "Pruvost", "prenom" => "Christian", "datembauche" => "1984", "fonction" => "cariste", "salaire" => "1850", "service" => "transport"]);
echo $employe2 -> toString();
$employe3 = new Employe(["nom" => "Gradis", "prenom" => "Lilian", "datembauche" => "2010", "fonction" => "plombier", "salaire" => "1900", "service" => "commercial"]);
echo $employe3 -> toString();
$employe4 = new Employe(["nom" => "Poivron", "prenom" => "Alima", "datembauche" => "1999", "fonction" => "medeçin", "salaire" => "2400", "service" => "médical"]);
echo $employe4 -> toString();
$employe5 = new Employe(["nom" => "Fernand", "prenom" => "Christiane", "datembauche" => "2019", "fonction" => "vétérinaire", "salaire" => "2250", "service" => "médical"]);
echo $employe5 -> toString();

?>