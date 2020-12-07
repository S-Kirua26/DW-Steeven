<?php

$roles = RolesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireRoles&mode=ajouter">Ajouter Role</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($roles as $unRole)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unRole->getNomRole().'</div>
            <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&mode=details&id='.$unRole->getIdRole().'">Aller voir un Role</a></div>
            <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&mode=modifier&id='.$unRole->getIdRole().'">Aller modifier un Role</a></div>
            <div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionRoles&mode=supprimer&id='.$unRole->getIdRole().'">Aller supprimer un Role</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';