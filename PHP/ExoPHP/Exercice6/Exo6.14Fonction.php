<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de notes il y a à inscrire?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

//  on calcule la somme des notes, on calcul la moyenne de cette somme et on initialise une variable $superieur pour plus tard
$somme = array_sum($tableau);
$moyenne = $somme / $demande;
$superieur = 0;

//  on calcule combien de personne sont égal ou supérieur à la moyenne
for ($i = 0; $i < $demande; $i++)
{
    if ($tableau[$i] >= $moyenne)
    {
        $superieur += 1;
    }
}

// on affiche le résultat à l'utilisateur
echo "Le total des notes vaut " .$somme. " , puis la moyenne de la somme vaut " .$moyenne. " , et il y a eu " .$superieur. " personnes au dessus de la moyenne ou égal à la moyenne";

?>