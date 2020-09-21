<?php

// On vérifie que les données inscrite par l'utilisateur soit valide (Pour le nombre de valeurs)
{
    do
    {
        do
        {
            $notes = readline("Combien de notes voulez-vous entrez? \n");
        } while (!is_numeric($notes) xor $notes < 0); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_int($notes * 1)); // on vérifie que le nombre est entier (pas réel)
}

// on créé une variable $somme pour calculer la somme total des notes 

$somme = 0;

// on crée un tableau en fonction du nombre de valeurs inscrite par l'utilisateur si ces données sont valides

for ($i = 1; $i <= $notes; $i++) 
{
    $tab[$i] = readline("Saisissez la note n°" . $i . ": ");
    while ($tab < 0 xor !ctype_digit($tab[$i])) 
    {
        echo ($tab < 0 xor !ctype_digit($tab[$i])) ? "Saisie invalide.\n" : "";
        $tab[$i] = readline("Saisissez la note n°" . $i . ":");
    }

    $somme += $tab[$i];
}

$moyenne = $somme / $notes;
$superieur = 0;

for ($i = 1; $i <= $notes; $i++)
{
    if ($tab[$i] >= $moyenne)
    {
        $superieur += 1;
    }
}


echo "Le total des notes vaut " .$somme. " , puis la moyenne de ces sommes vaut " .$moyenne. " , et il y a eu " .$superieur. " personnes au dessus de la moyenne ou égal à la moyenne";

?>