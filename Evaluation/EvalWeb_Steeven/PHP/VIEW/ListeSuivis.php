<?php

    $suivis = SuivisManager::getList();

    echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="libelle"><a class="centre size" href="index.php?page=FormulaireSuivis&mode=ajouter">ajouter un suivis</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($suivis as $unSuivi)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unSuivi->getNoteSuivi(). " " .$unSuivi->getIdMatiere(). " ".$unSuivi->getIdEleve().'</div>
            <div><a href="index.php?page=FormulaireSuivi&mode=modifier&id='.$unSuivi->getIdSuivi().'"><img src="../../IMG/modifier.png" alt="crayon pour modifier"></a></div>
            <div><a href="index.php?page=FormulaireSuivi&mode=supprimer&id='.$unSuivi->getIdSuivi().'"><img src="../../IMG/supprimer.png" alt="croix rouge pour supprimer"></a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';