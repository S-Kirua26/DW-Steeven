<?php

$clients = ClientsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireClients&mode=ajouter">'.texte("ajouterClient").'</a></div>
            <div class="espace"></div>
        </div>';

        foreach ($clients as $unClient)
        {
            if ($unClient->getIdClient()!=1)
            {
                echo '<div class="liste marginLight">
                <div class="libelle size centre marginBouton">'.$unClient->getNomClient().'</div>
                <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireClients&mode=details&id='.$unClient->getIdClient().'">'.texte("detailClient").'</a></div>
                <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireClients&mode=modifier&id='.$unClient->getIdClient().'">'.texte("modifierClient").'</a></div>';
            
                if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==2)
                {
                    echo '<div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionClients&mode=supprimer&id='.$unClient->getIdClient().'" >'.texte("supprimerClient").'</a></div>';
                }
                echo '</div>';
            }
        }
           
    
 
echo '</div>

</body>

</html>';