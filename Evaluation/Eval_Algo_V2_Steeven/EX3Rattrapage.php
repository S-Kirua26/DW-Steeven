<?php

$score = [7, 19, 7, 18, 12, 16, 19, 2, 13, 8, 13, 5, 3, 14, 11, 15, 19, 20, 4, 15]; // on créé le tableau

foreach ($score as $elt) { // on affiche le tableau
    echo $elt . "\t";
}

echo "\n";
echo "\n";

$somme = array_sum($score); // on calcule la somme
$moyenne = $somme / count($score); // on calcule la moyenne
echo "La somme des scores est de " . $somme . ". La moyenne est de " . $moyenne . "\n"; // on l'affiche à l'utilisateur

$max = $score[0]; // on initialise une variable max 

for ($i = 0; $i < count($score); $i++) { // si la valeur du tableau est plus grand que la précédente, $max prend +1
    if ($score[$i] > 10) {
        $max += 1;
    }
}

echo "Il y a " . $max . " scores au dessus de 10. \n"; // on affiche à l'utilisateur le nombre de scores au dessus de 10

for ($i = 0; $i < count($score); $i++) {
    if ($score[$i] > $i) {
        $grand = $score[$i]; // on regarde le plus haut score dans le tableau
        $personne = $i; // on regarde sa position
    }
}

echo "Le plus haut score est de " . $grand . " il a été réalisé par la personne n° " . $personne . "\n"; // on affiche à l'utilisateur le score le plus haut et sa position
