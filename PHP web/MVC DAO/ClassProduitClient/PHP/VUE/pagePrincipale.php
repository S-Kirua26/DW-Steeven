<?php

include "head.php";
include "header.php";

echo '<div class="page"></div>';
    echo '<div class="nomArticle">Liste des articles<br></div>
    <button class="bouton1"><a href="ajouter.php">Aller ajouter un produit</a></button>';
    $tableau = ProduitsManager::getList();
    foreach ($tableau as $unProduit)
    {
        echo '<div class="produit">
            <div class="nomProduit">'.$unProduit->getLibelleProduit().'</div>
            <button class="bouton4"><a href="detail.php?id='.$unProduit->getIdProduit().'">Aller voir un produit</a></button>
            <button class="bouton2"><a href="modifier.php?id='.$unProduit->getIdProduit().'">Aller modifier un produit</a></button>
            <button class="bouton3"><a href="supprimer.php?id='.$unProduit->getIdProduit().'">Aller supprimer un produit</a></button>
        </div>';   
    }
echo '</div>';

include "footer.php";