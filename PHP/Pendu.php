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
      for ($i = $depart; $i < $tableau; $i++)
       {
           if ($lettre == $tableau[$i])
           {
              $tab[$i] = $i;
           }
       }
    }

    // $tableau = array('B','O','N','J','O','U','R');
    // $positions = testerLettre('o',$tableau,0);

    //     foreach ($positions as $pos)
    //     {
    //         echo "position: ".$pos. "\n";
    //     }
?>