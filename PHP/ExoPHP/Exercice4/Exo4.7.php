<?php

// On vérifie que les données de l'utilisateur soit valide
$age = readline("Veuillez ecrire votre âge\n");
$permis = readline("Depuis combien d'annee avez vous le permis?\n");
$accident = readline("Avez-vous provoqué des accidents? si oui, combien?\n");
$fidelite = readline("Etes-vous l'un de nos clients depuis plus d'un an?\n");

while (ctype_alpha($age) or ctype_alpha($permis) or ctype_alpha($accident) or ctype_digit($fidelite) or (($age <= 0) or ($permis <= 0) or ($accident < 0) or ($fidelite != "OUI" && $fidelite != "NON")))
    {
        echo "Saisie incorrect, veuillez recommencer\n";
        $age = readline("Veuillez ecrire votre âge\n");
        $permis = readline("Depuis combien d'annee avez vous le permis?\n");
        $accident = readline("Avez-vous provoqué des accidents? si oui, combien?\n");
        $fidelite = readline("Etes-vous l'un de nos clients depuis plus d'un an?\n");
    }

$bonus = 1;

if ($age < 20 )
    $bonus = $bonus;
else
    $bonus = $bonus + 1





?>