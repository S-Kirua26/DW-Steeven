<?php

// on créé une fonction nous permettant de demander facilement (efficacement) et de vérifier facilement les données d'un utilisateur

function demanderEntier ($phrase) // vérifie si l'utilisateur entre un nombre valide avec une phrase spécifique
{
    $partant= readline($phrase);

    while (ctype_alpha($partant) xor $partant < 0 )
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $partant = readline($phrase);   
    }
    return $partant; // renvoie le nombre de l'utilisateur
}

function factorielle($nombre) //calcule la factorielle d'un nombre
{
    $facto = 1;

    for ($i = 2; $i <= $nombre; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

$partant = demanderEntier("Veuillez entrer le nombre de chevaux partant: \n");

// On affiche le nombre de chevaux partant à l'utilisateur
echo "Le nombre de chevaux partant est de: ". $partant. "\n";

$joues = demanderEntier("Veuillez entrer le nombre de chevaux jouées: \n");

// On affiche le nombre de chevaux joués à l'utilisateur
echo "Le nombre de chevaux joués est de: ". $joues. "\n";

// On initialise 6 variables pour calculer le taux de chance dans l'ordre ou dans le désordre 
$ordre = 0;
$desordre = 0;
$factoN = 0;
$factoP = 0;
$factoNP = 0;

$factoN = factorielle($partant);
$factoP = factorielle($joues);
$factoNP = factorielle($partant - $joues);

$ordre = $factoN / $factoNP;
$desordre = $factoN / ($factoP * ($factoNP));

echo "Il y a une chance sur ". $ordre. " de remporter la course dans l'ordre\n";
echo "Il y a une chance sur ". $desordre. " de remporter la course dans le desordre\n";

?>