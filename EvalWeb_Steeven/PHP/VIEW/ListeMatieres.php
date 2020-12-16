<?php

$matieres = MatieresManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireMatieres&mode=ajouter">Ajouter une matiere</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($matieres as $uneMatiere)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$uneMatiere->getLibelleMatiere().'</div>
            <div><a href="index.php?page=FormulaireMatieres&mode=modifier&id='.$uneMatiere->getIdEnseignant().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireMatieres&mode=supprimer&id='.$uneMatiere->getIdEnseignant().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>';
        }
           
echo '</div>

</body>

</html>';