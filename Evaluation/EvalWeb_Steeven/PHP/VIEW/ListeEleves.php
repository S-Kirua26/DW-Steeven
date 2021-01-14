<?php

$eleves = ElevesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireEleves&mode=ajouter">Ajouter un eleve</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($eleves as $unEleve)
        {
            echo '<div class="liste marginLight colonne">
            <div>
                <div class="espaceLarge"></div>
                <div class="size centre flexBouton">'.$unEleve->getNomEleve().'</div>
                <div class="size centre flexBouton">'.$unEleve->getPrenomEleve().'</div>
                <div class="size centre flexBouton">'.$unEleve->getClasse().'</div>
                <div><a href="index.php?page=FormulaireEleves&mode=modifier&id='.$unEleve->getIdEleve().'"><img src="./IMG/modifier.png" alt="crayon pour modifier"></a></div>
                <div class"espaceLight"></div>
                <div><a href="index.php?page=FormulaireEleves&mode=supprimer&id='.$unEleve->getIdEleve().'"><img src="./IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
                <div class="espaceLarge"></div>
            </div>';
        }
           
echo '</div>

</body>

</html>';