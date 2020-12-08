<?php

$representants = RepresentantsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireRepresentants&mode=ajouter">'.texte("ajouterRepresentant").'</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($representants as $unRepresentant)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unRepresentant->getNomRepres().'</div>
            <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireRepresentants&mode=details&id='.$unRepresentant->getIdRepres().'">'.texte("detailRepresentant").'</a></div>
            <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireRepresentants&mode=modifier&id='.$unRepresentant->getIdRepres().'">'.texte("modifierRepresentant").'</a></div>
            <div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionRepresentants&mode=supprimer&id='.$unRepresentant->getIdRepres().'">'.texte("supprimerRepresentant").'</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';