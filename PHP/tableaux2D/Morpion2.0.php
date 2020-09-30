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
    $symboles = [];
    for ($i = 0; $i < $nbJoueur; $i++) {

        do // on va verifier les données des joueurs
        {
           $symbole = $demande = strtoupper(readline("Quel est votre symbole joueur " . $i . " ? ")); // pour chaque joueur, on demande le symbole
    
            if ((!ctype_alnum($demande)) or (strlen($demande) > 1)) 
            {
                echo "Saisie incorrect, veuillez recommencer \n";
            }
        }while ((!ctype_alnum($demande)) or (strlen($demande) > 1) or (in_array($symbole,$symboles) === true));

         $symboles[$i] = $symbole; // dans le tableau $symboles, on ajoute les symboles des joueurs
    }
    return $symboles;
}

afficherTableau(choixSymbole(4));
