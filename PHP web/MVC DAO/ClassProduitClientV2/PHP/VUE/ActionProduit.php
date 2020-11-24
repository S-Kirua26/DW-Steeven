<?php

switch ($_GET["mode"])
{
    case "ajoutProduit":
    {
        $produits = new Produits2(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>intval($_POST["prix"]),"dateDePeremption"=>$_POST["dateDePeremption"]]);
        // $produits = new Produits2($_POST);
        ProduitsManager2::add($produits);
        break;
    }

    case "modifierProduit":
    {
        $produits = new Produits2($_POST);
        ProduitsManager2::update($produits);
        break;
    }

    case "supprimerProduit":
    {
        $psupprimer = new Produits2($_POST);
        ProduitsManager2::delete($psupprimer);
        break;
    }
}

header("Location: index2.php?");