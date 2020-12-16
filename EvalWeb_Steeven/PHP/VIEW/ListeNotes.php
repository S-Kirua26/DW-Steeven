<?php

$notes = NotesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireNotes&mode=ajouter">Ajouter une note</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($notes as $uneNote)
        {
            echo '<div class="liste marginLight colonne">
            <div>
                <div class="espaceLarge"></div>
                <div class=" size centre flexBouton">'.$uneNote->getNomEleve().'</div>
                <div class=" size centre flexBouton">'.$uneNote->getPrenomEleve().'</div>
                <div class=" size centre flexBouton">'.$uneNote->getNoteObtenue().'</div>
                <div><a href="index.php?page=FormulaireNotes&mode=modifier&id='.$uneNote->getIdNote().'"><img src="./IMG/modifier.png" alt="crayon pour modifier"></a></div>
                <div class="espaceLight"></div>
                <div><a href="index.php?page=FormulaireNotes&mode=supprimer&id='.$uneNote->getIdNote().'"><img src="./IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
                <div class="espaceLarge"></div>
            </div>';
        }
           
echo '</div>

</body>

</html>';