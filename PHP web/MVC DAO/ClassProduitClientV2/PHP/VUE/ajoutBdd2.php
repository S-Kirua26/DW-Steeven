<?php

$produits = new Produits2(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>intval($_POST["prix"]),"dateDePeremption"=>$_POST["dateDePeremption"]]);
// $produits = new Produits2($_POST);
ProduitsManager2::add($produits);


header("Location: index2.php");