<?php

$roles = RolesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireRoles&mode=ajouter">ajouter un role</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($roles as $unRole)
        {
            echo '<div class="liste marginLight colonne">
            <div>
                <div class="espaceLarge"></div>
                <div class="espaceLarge"></div>
                <div class="size centre flexBouton">'.$unRole->getNomRole().'</div>
                <div class="espaceLight"></div>
                <div><a href="index.php?page=FormulaireRoles&mode=modifier&id='.$unRole->getIdRole().'"><img src="./IMG/modifier.png" alt="crayon pour modifier"></a></div>
                <div class="espaceLight"></div>
                <div><a href="index.php?page=FormulaireRoles&mode=supprimer&id='.$unRole->getIdRole().'"><img src="./IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
                <div class="espaceLarge"></div>
                <div class="espaceLarge"></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';