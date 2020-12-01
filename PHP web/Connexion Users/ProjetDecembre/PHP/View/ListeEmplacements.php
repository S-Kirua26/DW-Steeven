<?php
$liste = EmplacementsManager::getList();


echo '<body class="colonne">

    <div class="contenui colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=formulaireEmplacements&typeFormulaire=ajouter">Ajouter un emplacement</a></div>
            <div class="espace"></div>
        </div>
        <div class="liste colonne">';
            foreach ($liste as $unEmplacement)
            {
            echo '<div class="emplacement margin">
            <div class="libelle marginBouton">'.$unEmplacement->getnumeroEmplacement().'</div>
            <div class=details marginBouton"><a href="index.php?page=formulaireEmplacements&typeFormulaire=details&id='.$unEmplacement->getIdEmplacement().'">Détails</a></div>
            <div class="modifier marginBouton"><a href="index.php?page=formulaireEmplacements&typeFormulaire=modifier&id='.$unEmplacement->getIdEmplacement().'">Modifier</a></div>
            <div class="supprimer marginBouton"><a href="index.php?page=traitementEmplacements&typeTraitement=supprimer&id='.$unEmplacement->getIdEmplacement().'">Supprimer</a></div>
            </div>';
            }

        echo '</div>
    </div>

</body>

<html>';
