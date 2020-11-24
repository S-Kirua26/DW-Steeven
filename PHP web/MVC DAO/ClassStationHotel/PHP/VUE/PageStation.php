<?php

echo '<div class="page"></div>';
    echo '<div class="nomArticle">Liste des stations<br></div>
    <button class="bouton1"><a href="index.php?code=FormStation&mode=ajoutStation">Aller ajouter une station</a></button>';
    $tableau = StationManager::getList();
    foreach ($tableau as $uneStation)
    {
        echo '<div class="produit">
            <div class="nomProduit marginTop">'.$uneStation->getNomStation().'</div>
            <button class="bouton4 marginTop marginLeft"><a href="index.php?code=DetailStation&id='.$uneStation->getIdStation().'">Aller voir une station</a></button>
            <button class="bouton2 marginTop marginLeft"><a href="index.php?code=FormStation&id='.$uneStation->getIdStation().'&mode=modifierStation">Aller modifier une station</a></button>
            <button class="bouton3 marginTop marginLeft"><a href="index.php?code=FormStation&id='.$uneStation->getIdStation().'&mode=supprimerStation">Aller supprimer une station</a></button>
        </div>';   
    }
echo '</div>';