<?php

$produits = ProduitsManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireProduits&mode=ajouter">Ajouter Produit</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($produits as $unProduit)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$unProduit->getNomProduit().'</div>
            <div class="details size centre marginBouton"><a class="centre" href="index.php?page=FormulaireProduits&mode=details&id='.$unProduit->getIdProduit().'">Aller voir un Produit</a></div>
            <div class="modifier size centre marginBouton"><a class="centre" href="index.php?page=FormulaireProduits&mode=modifier&id='.$unProduit->getIdProduit().'">Aller modifier un Produit</a></div>
            <div class="supprimer size centre marginBouton"><a class="centre" href="index.php?page=ActionProduits&mode=supprimer&id='.$unProduit->getIdProduit().'">Aller supprimer un Produit</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';