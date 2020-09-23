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

// on demande à l'utilisateur le raayon du cercle
$demande = demanderEntier("Quel est le rayon du cercle?");

// on initialise deux variables nous permettant de calculer la circonference et la surface 
$circonference = 2*3.14*$demande;
$surface = 3.14*($demande*$demande);

// on affiche le résultat à l'utilisateur
echo "Sa circonference est de: ".$circonference ."\n";
echo "sa surface est de: ".$surface. "\n";

// on demande à l'utilisateur si il continue ou non en lui demandant de répondre par O ou N
do
// strtoupper permet de convertir les lettres minuscules en majuscules
{
    $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
        if ($continuer != "O" && $continuer != "N")
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
}
// Tant que $continuer est different de "O" ou de "N", la boucle recommence
while ($continuer != "O" && $continuer != "N");

// si il veut continuer on lui redemande le rayon du cercle
if ($continuer == "O")
{
    $demande = demanderEntier("Quel est le rayon du cercle?");

    $circonference = 2*3.14*$demande;
    $surface = 3.14*($demande*$demande);

    echo "Sa circonference est de: ".$circonference ."\n";
    echo "sa surface est de: ".$surface. "\n";

    $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
    if ($continuer != "O" && $continuer != "N")
    {
        echo "Saisie incorrect, veuillez recommencer\n";
    }
} 

// sinon on lui dit au revoir
if ($continuer == "N")
{
    echo "Au revoir et à bientôt";
}
?>