<?php

// on demande deux nombre à l'utilisateur

    $nombre1 = readline("Veuillez entrez le premier nombre");
    $nombre2 = readline("Veuillez entrez le deuxieme nombre");

// on vérifie que le nombre est positif ou négatif

        if (($nombre1 > 0 and $nombre2 > 0) or ($nombre1 <0 and $nombre2 < 0))
        {
            echo "Le produit est positif";
        }
        else if (($nombre1 < 0 and $nombre2 > 0) or ($nombre1 > 0 and $nombre2 < 0))
        {
            echo "Le produit est négatif";
        }
        else if ($nombre1 == 0 or $nombre2 == 0)
        {
            echo "Le produit est nul";
        }

?>