<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);



if ($resultat = 1)
{
    echo "Les valeurs sont consecutif";
}
else
{
    echo "Les valeurs ne sont pas consécutif";
}


?>
