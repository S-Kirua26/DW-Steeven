<?php
    $nombre = readline("Veuillez entrez un nombre");
    $resultat = $nombre;

        if ($resultat <> 0) 
        {
            $resultat = $nombre*$nombre;
            echo $resultat;
        }
?>