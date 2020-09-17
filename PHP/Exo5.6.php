<?php
// On vérifie les données de l'utilisateur
do
{
    $nombre = readline("Veuillez ecrire un nombre de départ\n");
} while (ctype_alpha($nombre) or $nombre <= 0 );

$facto = 1;

    for ($i = 1;$i <= $nombre;$i++)
    {
        $facto = $facto * $i;

            if ($i < $nombre)
            {
                echo $i. "*";
            }
            else{
                echo $i. " = ". $facto. "\n";
            }
    }

echo "La factorielle de votre nombre est: ". $facto. "\n";
?>