<?php

require "ClassProduit.php";
require "ClassLieuxStockage.php";
require "ClassCategorie.php";

$stockage[0] = new LieuStockage (["numeroEntreprise" => "6", "zone" => "B3", "ville" => "bordeaux"]);
$stockage[1] = new LieuStockage (["numeroEntreprise" => "18", "zone" => "A8", "ville" => "toulouse"]);
$stockage[2] = new LieuStockage (["numeroEntreprise" => "9", "zone" => "B5", "ville" => "nancy"]);

$categorie[0] = new Categorie (["libelle" => "alimentaire", "TVA" => "20"]);
$categorie[1] = new Categorie (["libelle" => "alimentaire", "TVA" => "20"]);
$categorie[2] = new Categorie (["libelle" => "alimentaire", "TVA" => "20"]);

$produit[0] = new Produit (["numeroProduit" => "54", "prixHT" => "3", "designation" => "lait", "couleur" => "blanc", "dateValidite" => new DateTime('2020-11-04'), "categorie" => $categorie[0], "lieuxStockage" => $stockage[0]]);
$produit[1] = new Produit (["numeroProduit" => "105", "prixHT" => "15", "designation" => "pomme", "couleur" => "rouge", "dateValidite" => new DateTime('2020-10-24'), "categorie" => $categorie[1], "lieuxStockage" => $stockage[1]]);
$produit[2] = new Produit (["numeroProduit" => "41", "prixHT" => "8", "designation" => "biscuit", "couleur" => "marron", "dateValidite" => new DateTime('2020-11-15'), "categorie" => $categorie[2], "lieuxStockage" => $stockage[2]]);


?>