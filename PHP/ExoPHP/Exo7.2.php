<?php

require "LesFonctions.php";

$demande = demanderEntier2("Combien de notes dans le tableau?");
$tableau = creerTableauTaille($demande);
afficherTableauForeach($tableau);

    do
    {
        $yapermut = false;

        for ($i = 0; $i < count($tableau)-1; $i++)
        {
            if ($tableau[$i] > $tableau[$i + 1])
            {
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$i+1];
                $tableau[$i+1] = $temp;
                $yapermut = true;
            }
        }
    } while ($yapermut);

afficherTableauForeach($tableau);

?>