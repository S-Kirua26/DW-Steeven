<?php

// on va chercher le fichier php contenant toutes nos fonctions
require "LesFonctions.php";

// on demande à l'utilisateur combien de valeurs il y aura dans le tableau, puis on le créé et on l'affiche
$demande = demanderEntier2("Combien de valeurs il y a à inscrire?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);
$demande2 = demanderEntier2("Quel est l'indice à supprimer?")



?>