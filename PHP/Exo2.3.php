<?php
    $prix = readline("Entrez le prix HT d'un article");
    $nombre = readline("Veuillez entrez le nombre d'articles");
    $tva = readline("Veuillez entrez le taux de TVA");

    $resultat = $prix*$nombre;
    $resultat2 = $resultat + $tva;
    echo "Le prix TTC de vos courses est de: ".$resultat2. "euros";
?>