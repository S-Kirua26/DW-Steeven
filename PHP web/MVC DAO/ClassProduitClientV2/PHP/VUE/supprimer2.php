<?php

$idProduits = $_GET["id"];

$psupprimer = ProduitsManager2::findById($idProduits);
ProduitsManager2::delete($psupprimer);

header("Location: index2.php");
