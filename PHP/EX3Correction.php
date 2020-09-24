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

do
{
    $valeura = demanderEntier("Quelle est la valeur de a: \n");
    $valeurb = demanderEntier("Quelle est la valeur de b: \n");
    $valeurc = demanderEntier("Quelle est la valeur de c: \n");

    $delta = ($valeurb*$valeurb)-(4*$valeura*$valeurc);

    if ($valeura != 0)
    {
        if ($delta < 0)
        {
            echo "L'équation ne posséde pas de racine réelle \n";
            echo "d = ".$delta. "\n";
        }
        elseif ($delta == 0)
        {
            echo "L'équation posséde une racine double \n";
            echo "d = ".$delta . "\n";
            $double = -($valeurb/(2*$valeura));
            echo "x1 = x2 = ".$double . "\n";
        }
        elseif ($delta < 0)
        {
            echo "L'equation posséde deux racine distinctes \n";
            echo "d = ".$delta . "\n";
            $racine1 = (-$valeurb + sqrt($delta)) / (2*$valeura);
            $racine2 = (-$valeurb - sqrt($delta)) / (2*$valeura);
            echo "x1 = ".$racine1 . "\n";
            echo "x2 = ".$racine2 . "\n";
        }
    }
    // else
    // {
    //     if ($valeurb != 0)
    //     {
    //         echo "C'est du premier degré";

    //     }
    //     else
    //     {
    //         echo "L'équation n'en est plus une";
    //     }
    // }

    $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
    $test = ($continuer != "O" && $continuer != "N");
            if ($test)
            {
                echo "saisie invalide, recommencer";
            } while ($test);


} while ($continuer == "O");

echo "Au revoir";

?>