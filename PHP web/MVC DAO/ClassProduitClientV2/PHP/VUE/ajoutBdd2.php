<?php

include "head2.php";
// $produits = new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>$_POST["prix"],"dateDePeremption"=>$_POST["dateDePeremption"]]);
$produit = new Produits2($_POST);
ProduitsManager2::add($produits);

header("Location: index2.php");