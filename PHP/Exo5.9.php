<?php
// on initialise 4 variables nous permettant plus tard de savoir la somme total des courses et de savoir le nombre de billets et pieces rendu

$somme = 0;
$billet10 = 0;
$billet5 = 0;
$piece1 = 0;

// On verifie que l'utilisateur entre une donnée valide pour le prix des articles
$prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");

while (ctype_alpha($prix) xor $prix < 0 )
{
    echo "Veuillez reesayer, saisie incorrect\n";
    $prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");
    
}

// On calcule la somme du premier article et on l'affiche à l'utilisateur
$somme = $somme + $prix;
echo "Le montant du premier article vaut: ".$somme. "\n";

// Tant que le prix est différent de 0, on calcul la somme des courses
while ($prix != 0)
{
    $prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");
    $somme = $somme + $prix;
}

// Si le prix = 0 alors on affiche la somme total des courses de l'utilisateur
echo "Le montant total de vos courses est de: ".$somme. "\n";

// on vérifie que l'utilisateur entre une donnée valide pour la somme qu'il paye
    $paye = readline("Veuillez inscrire le montant que vous voulez payer\n");

    while (ctype_alpha($paye) or $paye <= 0 or $paye < $somme)
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $paye = readline("Veuillez inscrire le montant que vous voulez payer\n");;
    }

// Si tout est bon, on soustrait la somme à payer de la somme total des courses
$paye = $paye - $somme;

// On vérifie que la somme restante à payer contient des billets de 10€, 5€ ou pieces de 1€
    while ($paye >= 10)
    {
        $billet10 = $billet10 + 1;
        $paye = $paye - 10 ;
    }

    while ($paye >= 5)
    {
        $billet5 = $billet5 + 1;
        $paye = $paye -5;
    }

    while ($paye >= 1)
    {
        $piece1 = $piece1 + 1;
        $paye = $paye - 1;
    }
// On affiche la somme à restituer à l'utilisateur avec les billets de 10€, 5€ et pieces de 1€
    echo "On va vous restituer ". $billet10. " billet de 10€, ". $billet5. " billet de 5€ et ". $piece1. " piece de 1€";

    // tests
?>