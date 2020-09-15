<?php
    $nombre = readline("Veuillez entrez un nombre");
    $resultat = $nombre;

        if ($resultat <> 0) 
        {
            $resultat = $nombre*$nombre;
            echo "le carré de votre nombre est:".$resultat;
        }
?>