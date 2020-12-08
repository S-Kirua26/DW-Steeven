<?php

    $utilisateurs = UtilisateursManager::getList();

    echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireUtilisateurs&mode=ajouter">'.texte("ajouterUtilisateur").'</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($utilisateurs as $unUtilisateur)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unUtilisateur->getNomUtilisateur().'</div>
            <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireUtilisateurs&mode=details&id='.$unUtilisateur->getIdUtilisateur().'">'.texte("detailUtilisateur").'</a></div>
            <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireUtilisateurs&mode=modifier&id='.$unUtilisateur->getIdUtilisateur().'">'.texte("modifierUtilisateur").'</a></div>
            <div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionUtilisateurs&mode=supprimer&id='.$unUtilisateur->getIdUtilisateur().'">'.texte("supprimerUtilisateur").'</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';
