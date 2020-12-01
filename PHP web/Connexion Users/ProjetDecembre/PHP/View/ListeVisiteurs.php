<?php
$visiteurs = VisiteursManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaireVisiteurs&typeFormulaire=ajouter">Ajouter Visiteur</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste colonne ">';
foreach ($visiteurs as $unVisiteur){
    echo '
    <div class="visiteur margin">
    <div class="libelle marginBouton">'. $unVisiteur->getNomVisiteur().' '.$unVisiteur->getPrenomVisiteur().'</div>
    <div class="details marginBouton"><a href="index.php?page=formulaireVisiteurs&typeFormulaire=details&id='.$unVisiteur->getIdVisiteur().'">Détails</a></div>
    <div class="modifier marginBouton"><a href="index.php?page=formulaireVisiteurs&typeFormulaire=modifier&id='.$unVisiteur->getIdVisiteur().'">Modifier</a></div>
    <div class="supprimer marginBouton"><a href="index.php?page=traitementVisiteurs&typeTraitement=supprimer&id='.$unVisiteur->getIdVisiteur().'">Supprimer</a></div>
    </div>
    ';
}
echo '</div>
</div>
';