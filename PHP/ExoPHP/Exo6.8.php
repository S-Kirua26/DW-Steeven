<?php

    // On vérifie que les données inscrite par l'utilisateur soit valide (Pour le nombre de valeurs)

function demandeEntier($phrase) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre) xor $nombre < 0); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

// on creer un tableau en fonction de la valeur inscrite par l'utilisateur
function creerTableauAvecTaille($tailleTableau) 
{
    for ($i=0;$i<$tailleTableau;$i++)
    {
        $tab[]=demandeEntier("Entrer une valeur");
    }
    return $tab;
}

// on affiche un tableau 

function afficheTableauAvecForeach($tab)
{
    echo "\n";
    foreach ( $tab as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt."\t";
    }
    echo "\n";
}

$demande = demandeEntier("Veuillez noter le nombre de valeurs"); // on demande une valeur à l'utilisateur
$tableau = creerTableauAvecTaille($demande); // on crée le tableau en fonction des valeurs inscrites par l'utilisateur
afficheTableauAvecForeach($tableau); // on affiche le tableau à l'utilisateur

// on crée de variables qui nous permettront de savoir le nombre de valeurs positives et négatives

$totalsS = 0;
$totalsI = 0;

// on impose la condition en fonctions des valeurs inscrite par l'utilisateur

for ($i = 0; $i < $demande; $i++)
{
    if ($tableau[$i] > 0)
    {
        $totalsS += 1;
    }
    else
    {
        $totalsI += 1;
    }
}

// on affiche le résultat à l'utilsisateur

echo "nombre de valeurs positives " .$totalsS. " et nombre de valeurs négatives " .$totalsI;

?>