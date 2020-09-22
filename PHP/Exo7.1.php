<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);


$i = 0;
$consecutif = true;

do 
{
    if ($tableau[$i] == $tableau[$i+1])
    {
        $i ++;
    }
    else
    {
        $consecutif = false;
    }
}   while ($consecutif = true && $tableau[$i] - 1);

if ($consecutif = true)
{
    echo "Les valeurs sont consécutif";
}
else 
{
    echo "Les valeurs ne sont pas consécutif";
}

?>
