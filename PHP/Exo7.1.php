<?php

use function PHPSTORM_META\elementType;

require "LesFonctions.php";

$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

$consecutif = true;
$i = 0;

do 
{
    if ($tableau[$i] == $tableau[$i+1])
    {
        $i ++;
    }
    else
    {
        $consecutif == false;
    }
}   while ($consecutif == true && $tableau[$i] - 1);

if ($consecutif = true)
{
    echo "Les valeurs sont consécutif";
}
else
{
    echo "Les valeurs ne sont pas consécutif";
}

?>
