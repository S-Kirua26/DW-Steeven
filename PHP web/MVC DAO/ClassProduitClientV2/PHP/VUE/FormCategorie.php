<?php
$mode = $_GET['mode'];

echo '<div id="DivSousTitre">';

//en fonction du mode, on modifie l'entet du form
switch ($mode) {
    case "ajoutCategorie":
        {
            echo '<h5>Ajouter une nouvelle catégorie</h5></div>
	<form id="formulaire" method="post" action="index2.php?code=ActionCategorie&mode=ajoutCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "detailCategorie":
        {
            echo '<h5>Editer une catégorie</h5></div>
	<form id="formulaire" method="post" >';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "modifierCategorie":
        {
            echo '<h5>Modifier une catégorie</h5></div>
	<form id="formulaire" method="post" action="index2.php?code=ActionCategorie&mode=modifierCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "supprimerCategorie":
        {
            echo '<h5>Supprimer une catégorie</h5></div>
            <div class="erreur">Les produits dépendants vont être supprimés</div>
	<form id="formulaire" method="post" action="index2.php?code=ActionCategorie&mode=supprimerCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
}
if (isset($_GET['id'])) {
    $produits = CategoriesManager2::findById($_GET['id']);
}


// on crée les inputs du formulaire
// il faut que les name des input correspondent aux attributs de la class
// si on a les informations (cas edit, modif, supp) on les mets à jour
?>
<input type="hidden" name="idCategorie" <?php if (isset($produits)) echo 'value="'.$produits->getIdCategorie().'"'; ?> >
<div class="ligneDetail">
    <div class="libelleInput"> Libelle :</div>
    <div class="input"> <input type="text" name="libelleCategorie"
            value="<?php if (isset($produits)) echo $produits->getLibelleCategorie(); ?>"></div>
</div>



<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajoutCategorie":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Ajouter"/>'; break;
			}
		case "modifierCategorie":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Modifier"/>'; break;
			}
		case "supprimerCategorie":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Supprimer"/>'; break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <a href="index2.php?code=ListeCategorie" class=" crudBtn crudBtnRetour">Annuler</a>
</div>

</form>