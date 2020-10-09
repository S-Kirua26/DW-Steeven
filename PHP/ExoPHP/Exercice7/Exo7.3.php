<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

// on déclare une fonction nous permettant d' inverser l'ordre des éléments d'un tableau
$tableau = array_reverse($tableau);

// on affiche le second tableau à l'utilisateur
afficherTableauForeach($tableau);

?>