<?php
    // On vérifie que les données inscrite par l'utilisateur soit valide (Pour le nombre de valeurs)
{
    do
    {
        do
        {
            $valeur = readline("Combien de valeurs voulez-vous entrez? \n");
        } while (!is_numeric($valeur) xor $valeur < 0); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_int($valeur * 1)); // on vérifie que le nombre est entier (pas réel)
}

// on crée un tableau en fonction du nombre de valeurs inscrite par l'utilisateur 

for ($i = 1; $i <= $valeur; $i++) 
{
    $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
    while ($tab < 0 xor !ctype_digit($tab[$i])) {
        echo ($tab < 0 xor !ctype_digit($tab[$i])) ? "Saisie invalide.\n" : "";
        $tab[$i] = readline("Saisissez la valeur n°" . $i . ":");
     }

}

$grand = 0;
foreach ($tab as $elt)
{
    if ($elt > $grand)
    {
        $grand = $elt;
    }
}

    foreach ( $tab as $elt)  
    {
        echo "[".$elt."]"."\t";
    }
    echo "\n";

    echo "Le nombre le plus grand est: ".$grand;
?>