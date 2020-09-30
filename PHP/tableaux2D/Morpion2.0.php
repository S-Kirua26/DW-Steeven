<?php

function afficherTableau($tableau)
{
    foreach ($tableau as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo "[" . $elt . "] \t";
    }
}

function choixSymbole($nbJoueur)
{
    $symboles = []; // initialisation du tableau $symboles (qui contiendra les symboles des joueurs), pour l'instant vide
    for ($i = 0; $i < $nbJoueur; $i++) {

        do // on va verifier les données des joueurs
        {
           $symbole = $demande = strtoupper(readline("Quel est votre symbole joueur " . $i . " ? ")); // pour chaque joueur, on demande le symbole
    
            if ((!ctype_alnum($demande)) or (strlen($demande) > 1) or (in_array($symbole,$symboles) === true)) 
            {
                echo "Saisie incorrect, veuillez recommencer \n";
            }
        }
        // on boucle tant que le symbole n'est pas alphanumérique, que le symbole fait plus de un caractère et que le symbole est déjà utilisés(choisi)
        while ((!ctype_alnum($demande)) or (strlen($demande) > 1) or (in_array($symbole,$symboles) === true)); 

         $symboles[$i] = $symbole; // dans le tableau $symboles, on ajoute les symboles des joueurs
    }
    return $symboles;
}

afficherTableau(choixSymbole(4));
