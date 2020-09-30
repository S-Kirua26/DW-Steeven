<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

$consecutif = true;
$i = 0;

if ($tableau[0] < $tableau[$i + 1])
{
    $sens = 1;
}
else
{
    $sens = 0;
}

do
{
    $consecutif = false;
    if ($sens == 1)
    {
        if ($tableau[$i] + 1 == $tableau[$i+1])
        {
            $consecutif = true;
            $i+=1;
        }
    }
    else
    {
        if ($tableau[$i] - 1 == $tableau[$i+1])
        {
            $consecutif = true;
            $i+=1;
        }
    }

} while ($consecutif && $i < count($tableau) - 1);

if ($consecutif == true)
{
    echo "Les valeurs sont consecutif";
}
else
{
    echo "Les valeurs ne sont pas consecutif";
}

// Je remercie Marvin pour ce code
?>
