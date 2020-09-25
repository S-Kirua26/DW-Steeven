<?php

function demanderEntier($phrase) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre) xor $nombre < 0); // on verifie que la chaine de caractere ne contient que des chiffres et qu'il est superieur à 0
    } while (!is_float($nombre * 1) && !is_int($nombre *1)); // on vérifie que le nombre est réel ou qu'il est entier
    return $nombre; //renvoi le nombre saisi
}

do
{
    $demande = demanderEntier("Quel est le rayon du cercle? \n");

    $circonference = 2*pi()*$demande;
        echo "Sa circonférence est de: ".$circonference. "\n";
    $surface = pi()*($demande*$demande);
        echo "Sa surface est de: ".$surface. "\n";

    do
    {
        $continuer = strtoupper(readline("Voulez-vous continuer? (O/N) \n"));
        $test = ($continuer != "O" && $continuer != "N");
            if ($test)
            {
                echo "saisie invalide, ";
            } 
    } while ($test);

} while ($continuer == "O");

echo "Au revoir et à bientôt";

?>