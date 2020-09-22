<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Veuillez inscrire le nombre de valeurs");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

// on calcule
for ($i = 0; $i < $demande; $i++) 
{
    $tab[$i] = $tableau[$i] + 1;
}

// on affiche le résultat
afficherTableauForeach($tab);

?>