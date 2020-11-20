<?php

include "head.php";
include "header.php";

$idProduits = $_GET["id"];
$produis = ProduitsManager::findById($idProduits);

echo '<form action"AjoutBdd.php" method="post">
    <div>
        <label for="nom">Libelle : </label> 
        <input name="libelleProduit">
    </div>
    <div>
        <label for="nom">Prix : </label> 
        <input name="prix">
    </div>
    <div>
        <label for="nom">Date de Peremption : </label> 
        <input name="dateDePeremption">
    </div>';


include "footer.php";