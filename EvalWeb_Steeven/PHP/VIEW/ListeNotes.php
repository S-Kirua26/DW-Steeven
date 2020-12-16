<?php

$notes = NotesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireNotes&mode=ajouter">Ajouter une notes</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($notes as $uneNote)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$uneNote->getLibelleNote().'</div>
            <div><a href="index.php?page=FormulaireNotes&mode=modifier&id='.$uneNote->getIdNote().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireNotes&mode=supprimer&id='.$uneNote->getIdNote().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>';
        }
           
echo '</div>

</body>

</html>';