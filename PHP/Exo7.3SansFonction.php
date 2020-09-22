<?php

do
{
    do
    {
        $notes = readline("Veuillez notez le nombre de notes dans le tableau");
    } while(!is_numeric($notes) xor $notes < 0);
} while (!is_int($notes * 1));

for ($i=0; $i<$notes; $i++)
{
    $valeur= readline("Veuillez noter la valeur n°: ");

    while (ctype_alpha($valeur) xor $valeur < 0 )
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $valeur = readline($phrase);   
    }

    $tableau[$i] = $valeur;
}

echo "\n";
foreach ( $tableau as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
{
    echo $elt."\t";
}

for ($i = 0; $i < $notes; $i++)
{
    for ($j = $i; $j < $notes; $j++)
    {
        $temp = $tableau[$i];
        $tableau[$i] = $tableau[$j];
        $tableau[$j] = $temp;
    }
}

echo "\n";
foreach ( $tableau as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
{
    echo $elt."\t";
}

?>