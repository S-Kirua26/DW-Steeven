<?php

    do{
        $TotalV = readline("Combien de votes au total?\n");
        $Candidat1 = readline("Veuillez ecrire le score du candidat 1 (total sur 100)\n");
        $Candidat2 = readline("Veuillez ecrire le score du candidat 2 (total sur 100)\n");
        $Candidat3 = readline("Veuillez ecrire le score du candidat 3 (total sur 100)\n");
        $Candidat4 = readline("Veuillez ecrire le score du candidat 4 (total sur 100)\n");

        if (($TotalV <= 0 xor ctype_alpha($TotalV)) or ($Candidat1 <= 0 xor ctype_alpha($Candidat1)) or ($Candidat2 <= 0 xor ctype_alpha($Candidat2)) or ($Candidat3 <= 0 xor ctype_alpha($Candidat3)) or ($Candidat4 <= 0 xor ctype_alpha($Candidat4)));
        {
            echo "Saisie incorrect, veuillez recommencer\n";
        }
    } while 









        // Test de victoire ou de défaite avec vote supérieur à 50 ou vote inférieur à 12.5%
    switch($Candidat1)
    {
        case $Candidat1 > 50:
            echo "Vous êtes élu, félicitations";
        break;

        case $Candidat1 < 8:
            echo "Vous avez perdu, dommage";
        break;
    }

    // Test pour savoir si il est en ballotage favorable ou défavorable ou défaite suite à la victoire direct d'un autre candidat
    if ($Candidat2 > 50 or $Candidat3 > 50 or $Candidat4 > 50){
        echo "Vous avez perdu, dommage";
    }
    else if ($Candidat1 > $Candidat2 and $Candidat1 > $Candidat3 and $Candidat1 > $Candidat4 and $Candidat1 < 50) {
        echo "Vous êtes en ballotage favorable";
    }
    else if (($Candidat2 > $Candidat1 or $Candidat3 > $Candidat1 or $Candidat4 > $Candidat1) and ($Candidat2 < 50 and $Candidat3 < 50 and $Candidat4 < 50) and $Candidat1 > 7)
    {
        echo "Vous êtes en ballotage défavorable";
    }

        
?>

















