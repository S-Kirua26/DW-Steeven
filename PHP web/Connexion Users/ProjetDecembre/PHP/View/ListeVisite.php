<?php

$visite = VisiteManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="image">
                <a href="'.$uri.'lang=FR">
                    <img src="./IMG/drapeauFrance.jpg" alt="le drapeau de la France">
                </a>
            </div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireVisite&typeFormulaire=ajouter">'.texte("titreAjouter").'</a></div>
            <div class="image">
                <a href="'.$uri.'lang=EN">
                    <img src="./IMG/drapeauAnglais.jpeg" alt="le drapeau Anglais">
                </a>
            </div>
        </div>';
        foreach ($visite as $uneVisite)
        {
            echo '<div class="liste marginLight">
            <div class="libelle marginBouton">'.$uneVisite->getDateVisite().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=formulaireVisite&typeFormulaire=details&id='.$uneVisite->getIdVisite().'">'.texte("titreDetail").'</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=formulaireVisite&typeFormulaire=modifier&id='.$uneVisite->getIdVisite().'">'.texte("titreModifier").'</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=TraitementVisite&typeFormulaire=supprimer&id='.$uneVisite->getIdVisite().'">'.texte("titreSupprimer").'</a></div>
            </div>';
        }
 
echo '</div>

</body>

<html>';
