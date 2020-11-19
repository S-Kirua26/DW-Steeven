<?php

include "head.php";
include "header.php";

$idProduits = $_GET["id"];

$pdetail = ProduitsManager::findById($idProduits);

echo $pdetail->getLibelleProduit().'<br>';
echo $pdetail->getPrix().'<br>';
echo $pdetail->getDatedePeremption().'<br>';

echo '<button><a href="pagePrincipale.php">Retour a la page principale</button>';

include "footer.php";