<?php

include "head.php";
// $produits = new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>$_POST["prix"],"dateDePeremption"=>$_POST["dateDePeremption"]]);
$produit = new Produits($_POST);
ProduitsManager::add($produits);

header("Location: pagePrincipale.php");