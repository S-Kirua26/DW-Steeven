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
            echo '<div class="liste marginLight colonne">
            <div>
                <div class="espaceLarge"></div>
                <div class="size centre flexBouton">'.$unUtilisateur->getLoginUtilisateur().'</div>
                <div class="size centre flexBouton">'.$unUtilisateur->getNomUtilisateur().'</div>
                <div class="size centre flexBouton">'.$unUtilisateur->getPrenomUtilisateur().'</div>
                <div class="size centre flexBouton">'.$unUtilisateur->getMotDePasseUtilisateur().'</div>
                <div class="espaveLight"></div>
                <div><a href="index.php?page=FormulaireUtilisateur&mode=modifier&id='.$unUtilisateur->getIdUtilisateur().'"><img src="./IMG/modifier.png" alt="crayon pour modifier"></a></div>
                <div class="espaceLight"></div>
                <div><a href="index.php?page=FormulaireUtilisateur&mode=supprimer&id='.$unUtilisateur->getIdUtilisateur().'"><img src="./IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
                <div class="espaceLarge"></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';
