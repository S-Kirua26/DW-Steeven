<?php

require "LesFonctions.php";

$demande = demanderEntier2("Veuillez inscrire le nombre de valeurs");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

for ($i = 0; $i < $demande; $i++) 
{
    $tab[$i] = $tableau[$i] + 1;
}

afficherTableauForeach($tab);

?>