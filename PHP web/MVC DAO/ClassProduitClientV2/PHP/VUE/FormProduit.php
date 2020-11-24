<?php

$mode = $_GET["mode"];

switch ($mode)
{
    case "ajoutProduit":
    {
        echo '<form action="index2.php?code=ActionProduit&mode=ajoutProduit" method="post">';
        break;
    }

    case "modifierProduit":
    {
        echo '<form action="index2.php?code=ActionProduit&mode=modifierProduit" method="post">';
        break;
    }

    case "supprimerProduit":
    {
        echo '<form action="index2.php?code=ActionProduit&mode=supprimerProduit" method="post">';
        break;
    }
}

if (isset($_GET['id'])) {
    $produits = ProduitsManager2::findById($_GET['id']);
}

?>

<input type="hidden" name="idProduit" value="<?php if (isset($produits)) echo $produits->getIdProduit(); ?>"/>
<div>
    <label for="nom">Libelle Produit: </label>
    <div class="input"> 
        <input type="text" name="libelleProduit" value="<?php if (isset($produits)) echo $produits->getLibelleProduit(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Prix Produit: </label> 
    <div class="input"> 
        <input type="text" name="prix" value="<?php if (isset($produits)) echo $produits->getPrix(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Date de Peremption : </label> 
    <div class="input">
        <input type="text" name="dateDePeremption" value="<?php if (isset($produits)) echo $produits->getDateDePeremption(); ?>"/>
    </div>
</div>

<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajoutProduit":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Ajouter"/>'; 
                break;
			}
		case "modifierProduit":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Modifier"/>'; 
                break;
			}
		case "supprimerProduit":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Supprimer"/>'; 
                break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
?>

<a href="index2.php" class=" crudBtn crudBtnRetour">Annuler</a>
</div>

</form>