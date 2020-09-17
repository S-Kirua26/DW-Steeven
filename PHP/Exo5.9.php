<?php
// on initialise 4 variables nous permettant plus tard de savoir la somme total des courses et de savoir le nombre de billets et pieces rendu

$somme = 0;
$billet10 = 0;
$billet5 = 0;
$piece1 = 0;

// On verifie que l'utilisateur entre une donnée valide pour le prix des articles
$prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");

while (ctype_alpha($prix) xor $prix <= 0 )
{
    echo "Veuillez reesayer, saisie incorrect\n";
    $prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");
}

// Tant que le prix est différent de 0, on calcul la somme des courses
while ($prix != 0)
{
    $prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");
        if (ctype_alpha($prix) xor $prix < 0)
        {
            echo "Veuillez reesayer, saisie incorrect\n";
            $prix = readline("Veuillez inscrire le prix de vos articles (Sans décimal et terminant par 0 SVP)\n");
        }
     $somme = $somme + $prix;

}

// On affiche le total des courses de l'utilisateur
    echo "Le total vaut:".$somme."\n";



// on vérifie que l'utilisateur entre une donnée valide pour la somme qu'il paye
    $paye = readline("Veuillez inscrire le montant que vous voulez payer\n");
    
    while (ctype_alpha($paye) or $paye <= 0 or $paye < $somme)
    {
        echo "Veuillez reesayer, saisie incorrect\n";
        $paye = readline("Veuillez inscrire le montant que vous voulez payer\n");;
    }

// test en commentaire
?>