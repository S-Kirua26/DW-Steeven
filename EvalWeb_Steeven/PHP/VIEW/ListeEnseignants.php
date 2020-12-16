<?php

$enseignants = EnseignantsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireEnseignants&mode=ajouter">Ajouter un enseignant</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($enseignants as $unEnseignant)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unEnseignant->getNomEnseignant().'</div>
            <div><a href="index.php?page=FormulaireEnseignants&mode=modifier&id='.$unEnseignant->getIdEnseignant().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireEnseignants&mode=supprimer&id='.$unEnseignant->getIdEnseignant().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>';
        }
           
echo '</div>

</body>

</html>';