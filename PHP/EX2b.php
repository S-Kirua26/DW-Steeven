<?php

    function demanderEntier2($phrase) // Demande un entier à l'utilisateur
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
    // on demande le nombre pour lequel l'utilisateur désire la table de multiplication
    $demande = demanderEntier2("Entrer le nombre pour laquel vous voulez la table de multiplication: \n");

    // on calcule la table de multiplication en fonction du nombre choisi et on l'affiche
    for ($i = 1; $i < 11; $i++)
    {
        $resultat = $demande * $i;
        echo $demande ."\t *".$i. "\t = " .$resultat ."\n";
    }

    // on demande à l'utilisateur si il veut continuer
    do
    {
        $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
        if ($continuer != "O" && $continuer != "N")
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
    } while ($continuer != "O" && $continuer != "N");

    // si il veut continuer, on redemande le nombre pour la table
    if ($continuer == "O")
    {
        $demande = demanderEntier2("Entrer le nombre pour laquel vous voulez la table de multiplication: \n");

        for ($i = 1; $i < 11; $i++)
        {
            $resultat = $demande * $i;
            echo $demande ."\t *".$i. "\t = " .$resultat ."\n";
        }

        $continuer = strtoupper(readline("Voulez-vous continuer? (O pour oui ou N pour non) \n"));
        if ($continuer != "O" && $continuer != "N")
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
    }

    // sinon on lui au revoir
    if ($continuer != "O")
    {
        echo "A bientôt";
    }

?>