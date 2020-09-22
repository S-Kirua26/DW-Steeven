<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien voulez-vous saisir de nombres? \n");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

// on affiche le résultat à l'utilisateur (Le tableau commençant à l'indice 0)
echo "La valeur la plus grande est: ".max($tableau). " et elle se trouve en position: ".array_search(max($tableau), $tableau);



?>