<?php

// On verifie que l'utilisateur entre une donnée valide pour le nombre de chevaux partant
$partant= readline("Veuillez inscrire le nombre de chevaux partant pour la course\n");

while (ctype_alpha($partant) xor $partant < 0 )
{
    echo "Veuillez reesayer, saisie incorrect\n";
    $partant = readline("Veuillez inscrire le nombre de chevaux partant pour la course\n");   
}

// On affiche le nombre de chevaux partant à l'utilisateur
echo "Le nombre de chevaux partant est de: ". $partant. "\n";

// On verifie que l'utilisateur entre une donnée valide pour le nombre de chevaux joués
$joues= readline("Veuillez inscrire le nombre de chevaux que vous voulez joués\n");

while (ctype_alpha($joues) or $joues < 0 or $joues > $partant)
{
    echo "Veuillez reesayer, saisie incorrect\n";
    $joues = readline("Veuillez inscrire le nombre de chevaux que vous voulez joués\n");  
}

// On affiche le nombre de chevaux joués à l'utilisateur
echo "Le nombre de chevaux joués est de: ". $joues. "\n";

// On initialise 2 variables pour calculer le taux de chance dans l'ordre ou dans le désordre
$ordre = 0;
$desordre = 0;
$soustraction = ($partant - $joues);
$factoN = 0;
$factoP = 0;
$factoNP = 0;

$factoN = gmp_fact($partant);
$factoP = gmp_fact($joues);
$factoNP = gmp_fact($soustraction);

$ordre = $factoN / $factoNP;
$desordre = $factoN / ($factoP * ($factoNP));

echo "Il y a une chance sur ". $ordre. " de remporter la course dans l'ordre\n";
echo "Il y a une chance sur ". $desordre. " de remporter la course dans le desordre\n";

?>