<?php
    $nombre1 = readline("Veuillez entrez le premier nombre");
    $nombre2 = readline("Veuillez entrez le deuxieme nombre");

        if ($nombre1 > 0 and $nombre2 > 0)
        {
            echo "Le produit est positif";
        }
        else if (($nombre1 < 0 and $nombre2 > 0) or ($nombre1 > 0 and $nombre2 <0))
        {
            echo "Le produit est négatif";
        }
        else{
            echo "Le produit est nul";
        }

?>