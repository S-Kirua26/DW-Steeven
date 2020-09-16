<?php

// On vérifie que les données de l'utilisateur soit valide
    do{
        $Candidat1 = readline("Veuillez ecrire le score du candidat 1 (total sur 100)\n");
        $Candidat2 = readline("Veuillez ecrire le score du candidat 2 (total sur 100)\n");
        $Candidat3 = readline("Veuillez ecrire le score du candidat 3 (total sur 100)\n");
        $Candidat4 = readline("Veuillez ecrire le score du candidat 4 (total sur 100)\n");

        if (ctype_alpha($Candidat1) or ctype_alpha($Candidat2) or ctype_alpha($Candidat3) or ctype_alpha($Candidat4) or (($Candidat1 <= 0) or ($Candidat2 <= 0) or ($Candidat3 <= 0) or ($Candidat4 <= 0)))
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
    } 
    while (ctype_alpha($Candidat1) or ctype_alpha($Candidat2) or ctype_alpha($Candidat3) or ctype_alpha($Candidat4) or(($Candidat1 <= 0) or ($Candidat2 <= 0) or ($Candidat3 <= 0) or ($Candidat4 <= 0)));

// On calcul le total des votes 
    $Total = $Candidat1 + $Candidat2 + $Candidat3 + $Candidat4;
    echo "Le total des votes est de:".$Total."\n";


// Test de victoire ou de défaite avec vote supérieur à 50 ou vote inférieur à 12.5%
    switch($Candidat1)
    {
        case $Candidat1 > $Total/2:
            echo "Vous êtes élu, félicitations";
        break;

        case $Candidat1 < ($Total*(12.5/100)):
            echo "Vous avez perdu, dommage";
        break;
    }

// Test pour savoir si il est en ballotage favorable ou défavorable ou défaite suite à la victoire direct d'un autre candidat
    if ($Candidat2 > $Total/2 or $Candidat3 > $Total/2 or $Candidat4 > $Total/2){
        echo "Vous avez perdu, dommage";
    }
    else if ($Candidat1 > $Candidat2 and $Candidat1 > $Candidat3 and $Candidat1 > $Candidat4 and $Candidat1 < $Total/2) {
        echo "Vous êtes en ballotage favorable";
    }
    else if (($Candidat2 > $Candidat1 or $Candidat3 > $Candidat1 or $Candidat4 > $Candidat1) and ($Candidat2 < $Total/2 and $Candidat3 < $Total/2 and $Candidat4 < $Total/2) and $Candidat1 > ($Total*(12.5/100)))
    {
        echo "Vous êtes en ballotage défavorable";
    }
    else if (($Candidat1 == $Candidat2 or $Candidat1 == $Candidat3 or $Candidat1 == $Candidat4) or ($Candidat1 == $Candidat2 and $Candidat1 == $Candidat3 and $Candidat1 == $Candidat4) and ($Candidat1 < $Total/2 and $Candidat2 < $Total/2 and $Candidat3 < $Total/2 and $Candidat4 < $Total/2))
    {
        echo "Vous etes en ballotage ni favorable, ni défavorable";
    }
        /* Les différents Test:

            Candidat1 = 201
            Candidat2 = 99
            Candidat3 = 50
            $Candidat4 = 50
            Victoire du Candidat1

            Candidat1 = 25
            Candidat2 = 175
            Candidat3 = 100
            $Candidat4 = 100
            Défaite du Candidat1 

            Candidat1 = 175
            Candidat2 = 50
            Candidat3 = 100
            $Candidat4 = 75
            Candidat1 en ballotage favorable
            
            Candidat1 = 100                            Candidat1 = 100                             Candidat1 = 100
            Candidat2 = 175                            Candidat2 = 50                              Candidat2 = 50
            Candidat3 = 50                             Candidat3 = 175                             Candidat3 = 75
            $Candidat4 = 75                            Candidat4 = 75                              Candidat4 = 175
            Candidat1 en ballotage défavorable         Candidat1 en ballotage défavorable          Candidat1 en ballotage défavorable
            
            Candidat1 = 150                            Candidat1 = 150                         Candidat1 = 150                  Candidat1 = 150
            Candidat2 = 150                            Candidat2 = 150                         Candidat2 = 100                  Candidat2 = 100
            Candidat3 = 100                            Candidat3 = 100                         Candidat3 = 150                  Candidat3 = 100
            $Candidat4 = 100                           Candidat4 = 100                         Candidat4 = 100                  Candidat4 = 150
            Ni favorable, Ni défavorable               Ni favorable, Ni défavorable            Ni favorable, Ni défavorable     Ni favorable, Ni défavorable

            Candidat1 = 100
            Candidat2 = 100
            Candidat3 = 100
            $Candidat4 = 100
            Ni favorable; Ni défavorable

            Candidat1 = abcde           Candidat1 = 100           Candidat1 = 100         Candidat1 = 100
            Candidat2 = 175             Candidat2 = abcd          Candidat2 = 50          Candidat2 = 189
            Candidat3 = 50              Candidat3 = 175           Candidat3 = abcd        Candidat3 = 84
            $Candidat4 = 75             Candidat4 = 75            Candidat4 = 175         Candidat4 = abcde
            Recommencer                 Recommencer               Recommencer             Recommencer

            Candidat1 = -52           Candidat1 = 100           Candidat1 = 100         Candidat1 = 100
            Candidat2 = 175             Candidat2 = -52          Candidat2 = 50          Candidat2 = 189
            Candidat3 = 50              Candidat3 = 175           Candidat3 = -52        Candidat3 = 84
            $Candidat4 = 75             Candidat4 = 75            Candidat4 = 175         Candidat4 = -52
            Recommencer                 Recommencer               Recommencer             Recommencer
            
        */          
            
?>

















