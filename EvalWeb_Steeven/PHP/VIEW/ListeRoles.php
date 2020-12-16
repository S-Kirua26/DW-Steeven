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
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unRole->getNomRole().'</div>
            <div><a href="index.php?page=FormulaireRoles&mode=modifier&id='.$unRole->getIdRole().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireRoles&mode=supprimer&id='.$unRole->getIdRole().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';