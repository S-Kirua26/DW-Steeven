<?php
// On vérifie les données de l'utilisateur
do
{
    $nombre = readline("Veuillez ecrire un nombre de départ");
} while (ctype_alpha($nombre) or $nombre <= 0 );

$factorielle = gmp_fact($nombre);
echo "La factorielle de ". $nombre . " est: ".$factorielle;
?>