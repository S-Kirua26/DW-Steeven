<?php

require "LesFonctions.php";

$demande = demanderEntier2("Combien de notes il y a à inscrire?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

$somme = array_sum($tableau);
$moyenne = $somme / $demande;
$superieur = 0;

for ($i = 0; $i < $demande; $i++)
{
    if ($tableau[$i] >= $moyenne)
    {
        $superieur += 1;
    }
}

echo "Le total des notes vaut " .$somme. " , puis la moyenne de ces sommes vaut " .$moyenne. " , et il y a eu " .$superieur. " personnes au dessus de la moyenne ou égal à la moyenne";

?>