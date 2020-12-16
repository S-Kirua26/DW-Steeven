<?php

$eleves = ElevesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireEleves&mode=ajouter">Ajouter un eleve</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($eleves as $unEleve)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unEleve->getNomEleve().'</div>
            <div><a href="index.php?page=FormulaireEleves&mode=modifier&id='.$unEleve->getIdEleve().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireEleves&mode=supprimer&id='.$unEleve->getIdEleve().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>';
        }
           
echo '</div>

</body>

</html>';