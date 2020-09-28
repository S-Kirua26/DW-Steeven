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
    $demande = demanderEntier("Quel est le rayon du cercle? \n"); // on demande à l'utilisateur le rayon du cercle

    $circonference = 2*pi()*$demande; // calcul de la circonference
        echo "Sa circonférence est de: ".$circonference. "\n"; // affichage de la circonference
    $surface = pi()*($demande*$demande); // calcul de la surface
        echo "Sa surface est de: ".$surface. "\n"; // affichage de la surface

    do // on demande à l'utilisateur si il veut continuer ou non et on verifie ces données saisies
    {
        $continuer = strtoupper(readline("Voulez-vous continuer? (O/N) \n"));
        $test = ($continuer != "O" && $continuer != "N");
            if ($test)
            {
                echo "saisie invalide, ";
            } 
    } while ($test);

} while ($continuer == "O");

echo "Au revoir et à bientôt"; // si il ne veut plus continuer, on lui dit au revoir

?>