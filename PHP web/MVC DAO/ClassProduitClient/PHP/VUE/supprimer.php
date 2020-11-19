<?php

include "head.php";
include "header.php";

$idProduits = $_GET["id"];

$psupprimer = ProduitsManager::findById($idProduits);
ProduitsManager::delete($psupprimer);

header("Location: pagePrincipale.php");

include "footer.php";