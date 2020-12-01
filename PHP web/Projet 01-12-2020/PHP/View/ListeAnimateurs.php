<?php
$listeAnim= AnimateursManager::getList();
echo'<div></div>';
echo'<div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireAnimateurs&typeFormulaire=ajouter">Ajouter Animateur</a></div>
            <div class="espace"></div>
        </div>';

echo'<div class="liste colonne">';
foreach($listeAnim as $unAnim)
{
    echo'<div class="visiteur margin">
        <div class="libelle marginBouton">'.$unAnim->getNomAnimateur().' '.$unAnim->getPrenomAnimateur().'</a></div>
            <div class="details marginBouton"><a href="index.php?page=formulaireAnimateurs&typeFormulaire=details&id='.$unAnim->getIdAnimateur().'">Details</a></div>
            <div class="modifier marginBouton"><a href="index.php?page=formulaireAnimateurs&typeFormulaire=modifier&id='.$unAnim->getIdAnimateur().'">Modifier</a></div>
            <div class="supprimer marginBouton"><a href="index.php?page=formulaireAnimateurs&typeFormulaire=supprimer&id='.$unAnim->getIdAnimateur().'">Supprimer</a></div>
        </div>';
}
