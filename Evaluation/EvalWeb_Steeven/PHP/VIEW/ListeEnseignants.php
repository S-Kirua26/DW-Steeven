<?php

$enseignants = EnseignantsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireEnseignants&mode=ajouter">Ajouter un enseignant</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($enseignants as $unEnseignant)
        {
            echo '<div class="liste marginLight colonne">
            <div>
                <div class="espaceLarge"></div>
                <div class="size centre flexBouton">'.$unEnseignant->getLibelleMatiere().'</div>
                <div class="size centre flexBouton">'.$unEnseignant->getNomEnseignant().'</div>
                <div class="size centre flexBouton">'.$unEnseignant->getPrenomEnseignant().'</div>
                <div class="size centre flexBouton">'.$unEnseignant->getPseudoEnseignant().'</div>
                <div><a href="index.php?page=FormulaireEnseignants&mode=modifier&id='.$unEnseignant->getIdEnseignant().'"><img src="./IMG/modifier.png" alt="crayon pour modifier"></a></div>
                <div class="espaceLight"></div>
                <div><a href="index.php?page=FormulaireEnseignants&mode=supprimer&id='.$unEnseignant->getIdEnseignant().'"><img src="./IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
                <div class="espaceLarge"></div>
            </div>';
        }
           
echo '</div>

</body>

</html>';