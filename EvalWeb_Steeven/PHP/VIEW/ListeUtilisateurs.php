<?php

    $utilisateurs = UtilisateursManager::getList();

    echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireUtilisateurs&mode=ajouter">ajouter un utilisateur</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($utilisateurs as $unUtilisateur)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unUtilisateur->getNomUtilisateur().'</div>
            <div><a href="index.php?page=FormulaireUtilisateur&mode=modifier&id='.$unUtilisateur->getIdUtilisateur().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireUtilisateur&mode=supprimer&id='.$unUtilisateur->getIdUtilisateur().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';
