<?php
    $nombre1 = readline("Veuillez entrez le premier nombre");
    $nombre2 = readline("Veuillez entrez le deuxieme nombre");

    $produit = $nombre1*$nombre2;
        if ($produit > 0)
        {
            echo "Le produit est positif";
        }
        else if ($produit < 0)
        {
            echo "Le produit est négatif";
        }
        else{
            echo "Le produit est nul";
        }

?>