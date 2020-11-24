<?php

echo '<div class="page"></div>';
    echo '<div class="nomArticle">Liste des articles<br></div>
    <button class="bouton1"><a href="index2.php?code=FormProduit&mode=ajoutProduit">Aller ajouter un produit</a></button>';
    $tableau = ProduitsManager2::getList();
    foreach ($tableau as $unProduit)
    {
        echo '<div class="produit">
            <div class="nomProduit marginTop">'.$unProduit->getLibelleProduit().'</div>
            <button class="bouton4 marginTop marginLeft"><a href="index2.php?code=detail2&id='.$unProduit->getIdProduit().'">Aller voir un produit</a></button>
            <button class="bouton2 marginTop marginLeft"><a href="index2.php?code=FormProduit&id='.$unProduit->getIdProduit().'&mode=modifierProduit">Aller modifier un produit</a></button>
            <button class="bouton3 marginTop marginLeft"><a href="index2.php?code=FormProduit&id='.$unProduit->getIdProduit().'&mode=supprimerProduit">Aller supprimer un produit</a></button>
        </div>';   
    }
echo '</div>';
