<?php
// On vérifie les données de l'utilisateur
do
{
    $nombre = readline("Veuillez ecrire un nombre de départ");
} while (ctype_alpha($nombre) or $nombre <= 0 );

// on va afficher la table de multiplication de la valeur de 0 à 10
for ($i=0;$i<11;$i++)
  {
    $resultat = $nombre*$i;
    echo $nombre. "*" .$i. "=" .$resultat."\n";
  }  

?>