<?php

require "LesFonctions.php";

$demande = demanderEntier2("Combien de valeurs max aura votre 1er tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);
$demande2 = demanderEntier2("Combien de valeurs aura votre second tableau?");
$tableau2 = creerTableauTaille($demande2);
afficherTableauForeach($tableau2);

    /*
    for ($i = 0; $i < $demande2; $i++)
    {
          for ($j = 0; $j < $demande; $j++)
          {
             $calcul[] = $tableau2[$i] * $tableau[$j]; 
          }
    }
    */

    for ($i = 0; $i < $demande; $i++)
    {
          for ($j = 0; $j < $demande2; $j++)
          {
             $calcul[] = $tableau2[$j] * $tableau[$i]; 
          }
    }
echo array_sum($calcul);
?>