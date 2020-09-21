<?php

// On vérifie que les données inscrite par l'utilisateur soit valide (Pour le nombre de valeurs)
{
    do
    {
        do
        {
            $valeur = readline("Combien de valeurs voulez-vous entrez?");
        } while (!is_numeric($valeur) xor $valeur < 0); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_int($valeur * 1)); // on vérifie que le nombre est entier (pas réel)
}

// on crée un tableau en fonction du nombre de valeurs inscrite par l'utilisateur 

for ($i = 1; $i <= $valeur; $i++) 
{
    // On verifie que les données inscrite par l'utilisateur soit valide (Pour les valeurs)

    $nombre[$i] = readline("Inscrivez la valeur n° " . $i . ":");
    while ($nombre < 0 xor !ctype_digit($nombre[$i])) {
        echo ($nombre < 0 xor !ctype_digit($nombre[$i])) ? "Saisie invalide.\n" : "";
        $nombre[$i] = readline("Inscrivez la valeur n° " . $i . ":");
    }

     $tab[$i] = $nombre[$i] + 1;
}

// On affiche le tableau à l'utilisateur

    foreach ( $nombre as $elt)  
    {
        echo "[".$elt."]"."\t";
    }
    echo "\n";

    foreach ( $tab as $elt)
    {
        echo "[".$elt."]"."\t";
    }
    echo "\n";

?>