<?php

include "head.php";
include "header.php";
include "listePersonne.php";


echo '<div class="nomAttribut">
    <div class="espace"></div>
    <div class="case">
        <div class="titreAttribut">Nom</div>
    </div>  
    <div class="case">
        <div class="titreAttribut">Prenom</div>
    </div>  
    <div class="case">
        <div class="titreAttribut">Agence</div>
    </div>  
    <div class="case">
        <div class="titreAttribut">Service</div>
    </div>  
    <div class="espace"></div>
</div>';

echo '<div class="ligne>';
for ($i=0;$i<count($personnes);$i++) // parcourir tous les noms
{
    echo '<div class="personne">
        <a href="detailEmploye.php?id='.$personnes[$i]->getId().'" target="blank">
            <div class="espace"></div>
            <div class="casePersonne">
                <div class="titreAttribut"> '.$personnes[$i]->getNom().'</div>
            </div>
            <div class="casePersonne">
                <div class="titreAttribut"> '.$personnes[$i]->getPrenom().'</div>
            </div>
            <div class="casePersonne">
                <div class="titreAttribut"> '.$personnes[$i]->getAgence()->getNomAgence().'</div>
            </div>
            <div class="casePersonne">
                <div class="titreAttribut"> '.$personnes[$i]->getService().'</div>
            </div>
            <div class="espace"></div>
        </a>
    </div>';
}

// include "head.php";
// include "header.php";
// include "listePersonne.php";
// ?>
<!-- // <div class="ligne"> -->
<!-- // <?php     
// $compteur = 0;
// for ($i=0;$i<count($personnes);$i++) // parcourir tous les noms
// {
//     ?>
 //     <div class="personne colonne">
//         <div class="nom"> 
//             <?php echo $personnes[$i]->getNom().' '.$personnes[$i]->getPrenom(); ?>
//         </div>
//         <div class="age">
//             <?php echo $personnes[$i]->getAge();?>
//         </div>
//     </div> -->
<!-- //     <?php 
//     $compteur++;
//     if ($compteur ==4)      // permet de gérer la présentation Toutes les 4 personnes, on passe à la ligne
//     {
//        ?> 
//         </div>
//         <div class="ligne">
         <?php
         //$compteur=0; 
//     }
// }
// ?>
// </div>