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
    $valeurA = demanderEntier("Quelle est la valeur de A: \n");
    $valeurB = demanderEntier("Quelle est la valeur de B: \n");
    $valeurC = demanderEntier("Quelle est la valeur de C: \n");

    $delta = ($valeurB*$valeurB)-(4*$valeurA*$valeurC);

    if ($valeurA != 0)
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
            $double = -($valeurB/(2*$valeurA));
            echo "x1 = x2 = ".$double . "\n";
        }
        elseif ($delta > 0)
        {
            echo "L'equation posséde deux racine distinctes \n";
            echo "d = ".$delta . "\n";
            $racine1 = (-$valeurB + sqrt($delta)) / (2*$valeurA);
            $racine2 = (-$valeurB - sqrt($delta)) / (2*$valeurA);
            echo "x1 = ".$racine1 . "\n";
            echo "x2 = ".$racine2 . "\n";
        }
    }
    else
    {
        if ($valeurB != 0)
        {
            echo "C'est du premier degré \n";
            echo "L'équation s'annule pour x= -(c/b) : -0.25 \n";

        }
        else
        {
            echo "L'équation n'en est plus une !!! \n";
        }
    }

} while ($continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) ")) == "O");

echo "Au revoir et à bientôt";

?>