<?php

function demanderEntier($phrase) // vérifie si l'utilisateur entre un nombre valide avec une phrase spécifique
{
    $notes= readline($phrase);

    while (ctype_alpha($notes) xor $notes < 0 )
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $notes = readline($phrase);   
    }
    return $notes; // renvoie le nombre de l'utilisateur
}

// on créé une fonction nous permettant d'afficher un tableau
function AfficherTableau($tab)
{
    foreach ($tab as $elt)
    {
        echo "[".$elt."]"."\t";
    }
}

$somme = 0;
// on demande à l'utilisateur d'inscrire ses notes
for ($i = 0; $i <= 8; $i++)
{
    $notes[$i] = demanderEntier("Veuillez noter votre valeur n° \n");
    $somme = $somme + $notes[$i];
}

// On affiche le tableau avec les notes
echo AfficherTableau($notes);
echo $somme;

?>