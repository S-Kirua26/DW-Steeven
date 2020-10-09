<?php

function demanderEntier($phrase) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_float($nombre * 1) && !is_int($nombre *1)); // on vérifie que le nombre est réel ou qu'il est bien entier 
    return $nombre; //renvoi le nombre saisi
}

echo "Racine de l'équation du second degré: Y= a*x² + b*x + c \n";

$valeur1 = demanderEntier("Quelle est la valeur de a: \n");
$valeur2 = demanderEntier("Quelle est la valeur de b: \n");
$valeur3 = demanderEntier("Quelle est la valeur de c: \n");

$delta = ($valeur2*$valeur2)-(4*$valeur1*$valeur3);
$double = -($valeur2/(2*$valeur1));
$racine1 = (-$valeur2 + sqrt($delta)) / (2*$valeur1);
$racine2 = (-$valeur2 - sqrt($delta))/ (2*$valeur1);

switch($delta)
{
    case $delta < 0;
        echo "L'équation ne posséde pas de racine réelle \n";
        echo "d = ".$delta. "\n";
    break;

    case $delta == 0;
        echo "L'équation posséde une racine double \n";
        echo "d = ".$delta . "\n";
        echo "x1 = x2 = ".$double . "\n";
    break;

    case $delta > 0;
        echo "L'equation posséde deux racine distinctes \n";
        echo "d = ".$delta . "\n";
        echo "x1 = ".$racine1 . "\n";
        echo "x2 = ".$racine2 . "\n";
    break;
}

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

if ($continuer == "O")
{
    $valeur1 = demanderEntier("Quelle est la valeur de a: \n");
    $valeur2 = demanderEntier("Quelle est la valeur de b: \n");
    $valeur3 = demanderEntier("Quelle est la valeur de c: \n");

    $delta = ($valeur2*$valeur2)-(4*$valeur1*$valeur3);
    $double = -($valeur2/(2*$valeur1));
    $racine1 = (-$valeur2 + sqrt($delta)) / (2*$valeur1);
    $racine2 = (-$valeur2 - sqrt($delta))/ (2*$valeur1);

        switch($delta)
        {
            case $delta < 0;
                echo "L'équation ne posséde pas de racine réelle \n";
                echo "d = ".$delta. "\n";
            break;

            case $delta == 0;
                echo "L'équation posséde une racine double \n";
                echo "d = ".$delta . "\n";
                echo "x1 = x2 = ".$double . "\n";
            break;

            case $delta > 0;
                echo "L'equation posséde deux racine distinctes \n";
                echo "d = ".$delta . "\n";
                echo "x1 = ".$racine1 . "\n";
                echo "x2 = ".$racine2 . "\n";
            break;
        }

        $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
        if ($continuer != "O" && $continuer != "N")
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
}

if ($continuer != "O")
{
    echo "Au revoir et à bientôt";
}

?>