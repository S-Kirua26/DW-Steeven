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
    // on initialise 3 variables pour les valeurs de A,B et C
    $valeurA = demanderEntier("Quelle est la valeur de A: \n");
    $valeurB = demanderEntier("Quelle est la valeur de B: \n");
    $valeurC = demanderEntier("Quelle est la valeur de C: \n");

    // on calcule le delta
    $delta = ($valeurB*$valeurB)-(4*$valeurA*$valeurC);

    // on verifie si delta est superieur, inferieur ou bien nulle et on fait les calcul en fonction de ce résultat
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
        if ($valeurB != 0) // si a == 0 et que b != 0, on indique que l'équation est du premier degré
        {
            echo "C'est du premier degré \n";
            echo "L'équation s'annule pour x= -(c/b) : -0.25 \n";

        }
        else // sinon ce n'est plus une équation
        {
            echo "L'équation n'en est plus une !!! \n";
        }
    }

} while ($continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) ")) == "O"); // on recommence tant que l'utilisateur répond "O"

echo "Au revoir et à bientôt";

?>