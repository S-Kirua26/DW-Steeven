<?php

$idProduits = $_GET["id"];
var_dump($idProduits);

$pdetail = ProduitsManager2::findById($idProduits);

echo $pdetail->getLibelleProduit().'<br>';
echo $pdetail->getPrix().'<br>';
echo $pdetail->getDatedePeremption().'<br>';

echo '<button><a href="index2.php">Retour a la page principale</button>';

