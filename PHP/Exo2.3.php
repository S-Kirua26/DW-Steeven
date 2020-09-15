<?php
    $prix = readline("Entrez le prix HT d'un article");
    $nombre = readline("Veuillez entrez le nombre d'articles");
    $tva = readline("Veuillez entrez le taux de TVA");

    $resultat = $prix*$nombre*$tva;
    echo "Le cout total TTC vaut:".$resultat;
?>