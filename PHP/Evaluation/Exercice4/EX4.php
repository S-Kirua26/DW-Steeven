<?php

function afficherTableauForeach($tab)
{
    echo "\n";
    foreach ( $tab as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt."\t";
    }
    echo "\n";
}

function recommencer($phrase)
{
    // on demande à l'utilisateur si il continue ou non en lui demandant de répondre par O ou N
do
// strtoupper permet de convertir les lettres minuscules en majuscules
{
    $continuer = strtoupper(readline($phrase));
        if ($continuer != "O" && $continuer != "N")
        {
            echo "Cette avion n'existe pas \n";
        }
}
// Tant que $continuer est different de "O" ou de "N", la boucle recommence
while ($continuer != "O" && $continuer != "N");
}

function codeAvion($phrase)
{
    do
    // strtoupper permet de convertir les lettres minuscules en majuscules
    {
        $demande = strtoupper(readline($phrase));
            if ($demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN")
            {
                echo "Saisie incorrect, veuillez recommencer\n";
            }
    } while ($demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN");
}


$tableau1 = ["Tableau1","Avion","BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$tableau2 = ["Tableau2","CodeAvion","BO","AB","LJ","DC","CO","AN"];
$tableau3 = ["Tableau3","Vitesse Croisiere","800","950","700","900","1400","560"];
$tableau4 = ["Tableau4","Rayon Action","10000","12000","4500","8000","16000","2500"];


$codeA = codeAvion("Veuillez saisir le code de l'avion");

switch($tableau2)
{
    case $tableau2[2] == $codeA;
        echo "Avion : ".$tableau1[2]. " Vitesse: ".$tableau3[2]. " Rayon d'action: ".$tableau4[2] . "\n";
    break;

    case $tableau2[3] == $codeA;
        echo "Avion : ".$tableau1[3]. " Vitesse: ".$tableau3[3]. " Rayon d'action: ".$tableau4[3] . "\n";
    break;

    case $tableau2[4] == $codeA;
        echo "Avion : ".$tableau1[4]. " Vitesse: ".$tableau3[4]. " Rayon d'action: ".$tableau4[4] . "\n";
    break;

    case $tableau2[5] == $codeA;
        echo "Avion : ".$tableau1[5]. " Vitesse: ".$tableau3[5]. " Rayon d'action: ".$tableau4[5] . "\n";
    break;

    case $tableau2[6] == $codeA;
        echo "Avion : ".$tableau1[6]. " Vitesse: ".$tableau3[6]. " Rayon d'action: ".$tableau4[6] . "\n";
    break;

    case $tableau2[2] == $codeA;
        echo "Avion : ".$tableau1[6]. " Vitesse: ".$tableau3[6]. " Rayon d'action: ".$tableau4[6] . "\n";
    break;

    case $tableau2[7] == $codeA;
        echo "Avion : ".$tableau1[7]. " Vitesse: ".$tableau3[7]. " Rayon d'action: ".$tableau4[7] . "\n";
    break;
}

$recommencer = recommencer("Voulez-vous recommencer une autre recherche? \n");

// Si l'utilisateur veut continuer
if ($recommencer = "O")
{
    $codeA = codeAvion("Veuillez saisir le code de l'avion");

    switch($tableau2)
    {
        case $tableau2[2] == $codeA;
            echo "Avion : ".$tableau1[2]. " Vitesse: ".$tableau3[2]. " Rayon d'action: ".$tableau4[2] . "\n";
        break;

        case $tableau2[3] == $codeA;
        echo "Avion : ".$tableau1[3]. " Vitesse: ".$tableau3[3]. " Rayon d'action: ".$tableau4[3] . "\n";
        break;

        case $tableau2[4] == $codeA;
        echo "Avion : ".$tableau1[4]. " Vitesse: ".$tableau3[4]. " Rayon d'action: ".$tableau4[4] . "\n";
        break;

        case $tableau2[5] == $codeA;
        echo "Avion : ".$tableau1[5]. " Vitesse: ".$tableau3[5]. " Rayon d'action: ".$tableau4[5] . "\n";
        break;

        case $tableau2[6] == $codeA;
        echo "Avion : ".$tableau1[6]. " Vitesse: ".$tableau3[6]. " Rayon d'action: ".$tableau4[6] . "\n";
        break;

        case $tableau2[2] == $codeA;
        echo "Avion : ".$tableau1[6]. " Vitesse: ".$tableau3[6]. " Rayon d'action: ".$tableau4[6] . "\n";
        break;

        case $tableau2[7] == $codeA;
        echo "Avion : ".$tableau1[7]. " Vitesse: ".$tableau3[7]. " Rayon d'action: ".$tableau4[7] . "\n";
        break;
    }
    $recommencer = recommencer("Voulez-vous recommencer une autre recherche? \n");
}

// si il ne veut plus continuer
if ($recommencer != "O")
{
    echo "Au revoir";
}
?>