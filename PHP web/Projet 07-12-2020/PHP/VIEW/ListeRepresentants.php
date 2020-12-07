<?php

$representants = RepresentantsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=FormulaireRepresentants&mode=ajouter">Ajouter Representant</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($representants as $unRepresentant)
        {
            echo '<div class="liste marginLight">
            <div class="libelle marginBouton">'.$unRepresentant->getNomRepresentant().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=formulaireRepresentants&mode=details&id='.$unRepresentant->getIdRepresentant().'">Aller voir un Representant</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=formulaireRepresentants&mode=modifier&id='.$unRepresentant->getIdRepresentant().'">Aller modifier un Representant</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=TraitementRepresentants&mode=supprimer&id='.$unRepresentant->getIdRepresentant().'">Aller supprimer un Representant</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';