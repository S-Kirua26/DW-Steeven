<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = ProduitsManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = ProduitsManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = ProduitsManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idProduit" value="'.$choix->getIdProduit().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="nomProduit" placeholder="Nom du Produit" value="<?php if ($mode != "ajouter") echo $choix->getNomProduit() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Couleur du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="couleurProduit" placeholder="Couleur du Produit" value="<?php if ($mode != "ajouter") echo $choix->getCouleurProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Poids du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="poidsProduit" placeholder="Poids du Produit" value="<?php if ($mode != "ajouter") echo $choix->getPoidsProduit() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
<?php 

switch ($mode)
    {
		case "ajouter":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
                break;
			}
		case "supprimer":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Supprimer"/></div><div class="espace"></div></div>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    
</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=ListeProduits">Retour</a></div>
<div class="espace"></div>
</div>

</form>