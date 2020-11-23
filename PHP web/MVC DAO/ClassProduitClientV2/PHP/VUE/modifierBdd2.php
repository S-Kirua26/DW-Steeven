<?php

$produits = new Produits2($_POST);
ProduitsManager2::update($produits);

 header("Location: index2.php");
