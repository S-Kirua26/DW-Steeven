<?php

    function afficherTableau($tableau)
    {
        foreach ( $tableau as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
        {
            echo $elt."\t";
        }
    }

    // $tableau = array('B','O','N','J','O','U','R');
    // echo "Cette méthode doit donner BONJOUR et cela donne: \n";afficherTableau($tableau);

    function coderMot($test)
    {
        $tableau = str_split($test);

        for ($i = 0; $i < count($tableau); $i ++)
        {
            $tableau[$i] = "_";
        }
        return $tableau;
    }

    // $test = "bonjour";
    // echo "Cette méthode doit donner _ _ _ _ _ _ _  et ça donne: \n";afficherTableau(coderMot($test));

    function testerLettre($lettre,$tableau,$depart)
    {
        $tableauRecherche = array_slice($tableau,$depart);
        $resultat = (array_search($lettre,$tableauRecherche));

        if ($resultat === false)
        {
            return [];
        }
        else
        {
            $reponse[] = $resultat + $depart;
            $positions = array_merge($reponse,testerLettre($lettre,$tableau,$resultat+$depart+1));
            return $positions;
        }
    }

    // echo "Cette méthode doit donner 1 et 4 et ça donne \n";
    // $tableau = array('B','O','N','J','O','U','R');
    // afficherTableau(testerLettre('O',$tableau,0));
    

    function ajouterUneLettre($lettre,$tableau,$position)
    {
        $tableau[$position] = $lettre;
        return $tableau;
    }

    // echo "Cette méthode doit donner BONKOUR et ça donne: \n";
    // $tableau = array('B','O','N','J','O','U','R');
    // afficherTableau(ajouterUneLettre('K',$tableau,3))

    function ajouterLesLettres($lettre,$tableau,$listePosition)
    {
        ajouterUneLettre($lettre,$tableau,$listePosition);
        return $tableau;
    }
    
    $motATrouver = "BONJOUR";
    $tableau = array('B','_','N','J','_','U','_',);
    echo "Cette méthode doit donner BONJOU_ et ça donne: \n";
    afficherTableau(ajouterLesLettres('O',$tableau,testerLettre('O',$tableau,0)));
?>