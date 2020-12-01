<?php
$conventions = ConventionsManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaireConventions&typeFormulaire=ajouter">Ajouter Convention</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste colonne ">';

foreach ($conventions as $uneConvention)
{
    echo '
    <div class="convention margin">
    <div class="libelle marginBouton">'.$uneConvention->getNomConvention().'</div>
    <div class="details marginBouton"><a href="index.php?page=formulaireConventions&typeFormulaire=details&id='.$uneConvention->getIdConvention().'">Détails</a></div>
    <div class="modifier marginBouton"><a href="index.php?page=formulaireConventions&typeFormulaire=modifier&id='.$uneConvention->getIdConvention().'">Modifier</a></div>
    <div class="supprimer marginBouton"><a href="index.php?page=traitementConventions&typeTraitement=supprimer&id='.$uneConvention->getIdConvention().'">Supprimer</a></div>
    </div>
    ';
}