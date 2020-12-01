<?php
$salle = SallesManager::getList();
echo '<div></div>';
echo '<div class="contenu colonne">
<div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre" href="index.php?page=formulaireSalles&typeFormulaire=ajouter">Ajouter une salle</a></div>
    <div class="espace"></div>
</div>';

echo '<div class="liste colonne ">';
foreach ($salle as $uneSalle){
    echo '
    <div class="visiteur marginLight">
    <div class="libelle marginBouton">'. $uneSalle->getNomSalle().'</div>
    <div class="details marginBouton"><a href="index.php?page=formulaireSalles&typeFormulaire=details&id='.$uneSalle->getIdSalle().'">Détails</a></div>
    <div class="modifier marginBouton"><a href="index.php?page=formulaireSalles&typeFormulaire=modifier&id='.$uneSalle->getIdSalle().'">Modifier</a></div>
    <div class="supprimer marginBouton"><a href="index.php?page=traitementSalles&typeTraitement=supprimer&id='.$uneSalle->getIdSalle().'">Supprimer</a></div>
    </div>
    ';
}
echo '</div>


</div>
';
