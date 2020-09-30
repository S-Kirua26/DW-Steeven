<?php

require "LesFonctions.php";

$demande = demanderEntier2("Combien de valeurs max aura votre 1er tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);
$demande2 = demanderEntier2("Combien de valeurs aura votre second tableau?");
$tableau2 = creerTableauTaille($demande2);
afficherTableauForeach($tableau2);

for ($i = 0; $i < $demande; $i++)
{
  $calcul[$i] = $tableau[$i] + $tableau2[$i];
}

afficherTableauForeach($calcul);

?>