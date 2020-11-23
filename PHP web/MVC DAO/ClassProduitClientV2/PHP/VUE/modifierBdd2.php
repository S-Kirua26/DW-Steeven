<?php

include "head.php";
$produits = new Produits2($_POST);
ProduisManager2::update($produits);

header("Location: index2.php");
