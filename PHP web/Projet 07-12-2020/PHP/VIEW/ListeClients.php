<?php

$clients = ClientsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireClients&mode=ajouter">Ajouter Client</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($clients as $unClient)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unClient->getNomClient().'</div>
            <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireClients&mode=details&id='.$unClient->getIdClient().'">Aller voir un Client</a></div>
            <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireClients&mode=modifier&id='.$unClient->getIdClient().'">Aller modifier un Client</a></div>
            <div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionClients&mode=supprimer&id='.$unClient->getIdClient().'">Aller supprimer un Client</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';