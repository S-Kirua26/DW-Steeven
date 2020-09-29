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
    $borneInferieur = demanderEntier("Entrer la borne inférieure: ");
    $borneSuperieur = demanderEntier("Entrer la borne superieure: ");

    for ($i = $borneInferieur; $i < $borneSuperieur; $i++) {
        if(!is_int($i/2) == true xor !is_int($i/3) == true xor !is_int($i/5) == true )
        {
            echo $i." est premier";
        }
    }

    $autreRecherche = recommencer("Voulez-vous faire une autre recherche? (O/N) \n"); // on demande à l'utilisateur si il veut continuer

} while ($autreRecherche == "O");
