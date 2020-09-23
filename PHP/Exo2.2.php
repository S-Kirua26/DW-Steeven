<?php
    $nombre = readline("Veuillez entrez un nombre");
    
        if (($nombre <= 0) or ($nombre >= 0))
        {
            $resultat = $nombre*$nombre;
            echo "le carré de votre nombre est:".$resultat;
        }

// Donne le carre du nombre
?>