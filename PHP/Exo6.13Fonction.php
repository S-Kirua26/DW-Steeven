<?php

require "LesFonctions.php";

// On créé deux variable qui nous seront utiles plus tard

$grand = 0;

$demande = demanderEntier2("Combien voulez-vous saisir de nombres? \n");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

// on affiche le résultat à l'utilisateur (Le tableau commençant à l'indice 0)
echo "La valeur la plus grande est: ".max($tableau). " et elle se trouve en position: ".array_search(max($tableau), $tableau);



?>