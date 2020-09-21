<?php

// on créé une fonction nous permettant de demander facilement (efficacement) et de vérifier facilement les données d'un utilisateur

function demanderEntier ($phrase) // vérifie si l'utilisateur entre un nombre valide avec une phrase spécifique
{
    $partant= readline($phrase);

    while (ctype_alpha($partant) xor $partant < 0 )
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $partant = readline($phrase);   
    }
    return $partant; // renvoie le nombre de l'utilisateur
}

// permet de calculer la factrielle d'un nombre

function factorielle($nombre)
{
    $facto = 1;

    for ($i = 2; $i <= $nombre; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

// permet d'afficher un tableau selon les valeurs de l'utilisateur

function afficherTableau($tableau) 
{
    for ($i = 1 ; $i<count($tableau); $i++) 
    {
        echo "[".$tableau[$i]."]"."\t";
    } 
    return $tableau;
}

// autre façon d'afficher un tableau avec foreach

function afficherTableauForeach($tab)
{
    echo "\n";
    foreach ( $tab as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt."\t";
    }
    echo "\n";
}

// 2eme fonction pour demander un entier à l'utilisateur

function demanderEntier2($phrase) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

// Permet de creer un tableau avec une taille déjà connu

function creerTableauTaille($tailleTableau) 
{
    for ($i=0;$i<$tailleTableau;$i++)
    {
        $tab[]=demanderEntier("Entrer une valeur");
    }
    return $tab;
}

// Permet de creer un tableau sans connaître la taille du tableau

function creerTableauSansTaille()
{
    do{
        $nb = demanderEntier("Entrer une valeur");
        if ($nb != 0 ) //evite que le dernier 0 entre dans le tableau
        {
            $tab[]=$nb;
        }
    }
    while ($nb != 0 );
    return $tab;
}

?>