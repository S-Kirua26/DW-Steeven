<?php

require "LesFonctions.php";

$demande = demanderEntier2("Combien de valeurs il y aura dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

$tableau = array_reverse($tableau);
afficherTableauForeach($tableau);

?>