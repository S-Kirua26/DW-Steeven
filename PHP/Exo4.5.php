<?php
    do
    {
        $age = readline("Veuillez entrez votre age\n");
            if ($age <= 0 xor ctype_alpha($age))
            {
                echo "Saisie incorrect, veuillez recommencer\n";
            }
    }
    // ctype_alpha permet de vérifier si tout les caractére d'une chaine sont des lettres
    // Si age <= 0 ou des lettres sont inscrit, on recommence la boucle
    while ($age <= 0 xor ctype_alpha($age));

    do
    // strtoupper permet de convertir les lettres minuscules en majuscules
    {
        $sexe = strtoupper(readline("Veuillez entrez votre sexe (H pour Homme et F pour femme (Attention au majuscule)\n"));
            if ($sexe != "H" && $sexe != "F")
            {
                echo "Saisie incorrect, veuillez recommencer\n";
            }
    }
    // Tant que $sexe est different de "H" ou de "F", la boucle recommence
    while ($sexe != "H" && $sexe != "F");

    if (($age > 20 and $sexe == "H") or (($age >= 18 and $age <= 35) and $sexe == "F"))
    {
        echo "Vous devez payer des impôts";
    }
    else
    {
        echo "Vous ne payer pas d'impôts";
    }

?>