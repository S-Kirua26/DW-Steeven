<?php

function demanderEntier($phrase) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est bien entier
    return $nombre; //renvoi le nombre saisi
}

function recommencer($phrase)
{
    do {
        $continuer = strtoupper(readline($phrase)); // on demande à l'utilisateur si il veut continuer
        $test = ($continuer != "O" && $continuer != "N"); // tant que la réponse est différent de "O" ou bien "N", on boucle
        if ($test) {
            echo "saisie invalide, ";
        }
    } while ($test);
    return $continuer;
}

do {
    $temperature = demanderEntier("Quel la température que vous-voulez renseigner? \n"); // on demande à l'utilisateur la temperature

    if ($temperature > 100) {
        echo "L'eau est à l'état gazeux \n"; // si temp > 100 , l'eau est à l'état gazeux
    } elseif ($temperature < 0) {
        echo "L'eau est à l'état solide \n"; // si temp < 0 , l'eau est à l'état solide
    } else {
        echo "L'eau est à l'état liquide \n"; // si temp > 0 et temp <100 , l'eau est à l'état liquide
    }

    $autreRecherche = recommencer("Voulez-vous faire une autre recherche? (O/N) \n"); // on demande à l'utilisateur si il veut continuer

} while ($autreRecherche == "O");

echo "Au revoir";
