<?php

include "head.php";
$produits = new Produits($_POST);
ProduisManager::update($produits);

header("Location: pagePrincipale.php");
