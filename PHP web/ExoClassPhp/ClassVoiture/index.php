<?php

include ("head.php");
include ("ObjetVoiture.php");

echo '<div class ="ligne">';

$compteur = 0;

for ($i = 0; $i<count($voiture); $i++)
{
    echo '<div class="voiture colonne">
    <div class="marque"> '.$voiture[$i]->getMarque().'</div>
    <div class="modele">'.$voiture[$i]->getModele().'</div>
    <div class="km">'.$voiture[$i]->getKm().'</div>
    <div class="couleur">'.$voiture[$i]->getCouleur().'</div>
    </div>';

    $compteur++;

    if ($compteur ==4)      // permet de gérer la présentation Toutes les 4 personnes, on passe à la ligne
    {
        echo '</div>';
        echo '<div class="ligne">';
        $compteur=0;
    }
}

echo '</div>';
echo '</body>';
echo '</html>';