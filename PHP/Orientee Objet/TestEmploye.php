<?php

require "ClassEmploye.php";

// on initialise 5 objets employé et on ajoute les informations correspondantes.
$employe[0] = new Employe(["nom" => "Pavu", "prenom" => "Paprika", "datembauche" => new DateTime('2014-05-10'), "fonction" => "vendeur", "salaire" => "2200", "service" => "commercial"]);
$employe[1] = new Employe(["nom" => "Pruvost", "prenom" => "Christian", "datembauche" => new DateTime('1984-07-11'), "fonction" => "cariste", "salaire" => "1850", "service" => "transport"]);
$employe[2] = new Employe(["nom" => "Gradis", "prenom" => "Lilian", "datembauche" => new DateTime('2010-03-05'), "fonction" => "développeur", "salaire" => "2500", "service" => "informatique"]);
$employe[3] = new Employe(["nom" => "Poivron", "prenom" => "Alima", "datembauche" => new DateTime('1999-01-23'), "fonction" => "agent immobilier", "salaire" => "2400", "service" => "immobilier"]);
$employe[4] = new Employe(["nom" => "Fernand", "prenom" => "Léa", "datembauche" => new DateTime('2019-03-08'), "fonction" => "vétérinaire", "salaire" => "2250", "service" => "médical"]);


$dateAct = new DateTime('2020-12-01'); // on initialise une variable avec la date du our
$jourDePrime = (new DateTime())->setDate($dateAct->format('Y'),11,30); // on récupére l'année d'un date donnée

// on affiche si le transfert des primes ont été envoyés pour chaque employés
foreach ($employe as $elt)
{
    if ($jourDePrime < $dateAct)
    {
        echo "L'ordre de transfert à été envoyé à la banque pour Monsieur/Madame ".$elt->getNom()." " . $elt->getPrenom()." pour un montant de ".$elt->primeTotal()." au total \n";
    }
    else{
        echo "L'ordre de transfert n'a pas été envoyé à la banque \n\n";
    }
}

 echo "\n Dans l'entreprise, au total, il y a ".Employe::getListe()." employés \n\n"; // on affiche le nombre d'employés dasn l'entreprise

// ********* On affiche les caractéristique des employés par ordre alphabétique en fonction du nom et prenom ************

// usort($employe,array("Employe","compareToNomPrenom"));

//  foreach ($employe as $elt)
//  {
//      echo $elt->toString();
//  }


// ********** On affiche les caractéristiques des employés par leurs noms de services ******************

usort($employe, array("Employe", "compareToServiceNomPrenom"));

foreach ($employe as $elt)
{
    echo $elt->toString();
}

// on calcule la masse salariale et on l'affiche
$masseSalarialeTotale = 0;
foreach ($employe as $elt)
{
    $masseSalarialeTotale += $elt->masseSalariale();
}
echo "La masse salariale totale est de " . $masseSalarialeTotale . "€\n";

?>