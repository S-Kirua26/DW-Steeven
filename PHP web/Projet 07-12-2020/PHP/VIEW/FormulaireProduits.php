<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionProduits&mode=ajouter">';
            break;
        }
    // case "rechercher":
    //     {
    //         echo '<form method="POST" action="index.php?page=ActionProduits$mode=rechercher">';
    //         break;
    //     }
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
                <?php echo texte("nomProduit");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="nomProduit" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomProduit().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("couleurProduit");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="couleurProduit" <?php if($mode != "ajouter") echo 'value= "'.$choix->getCouleurProduit().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("poidsProduit");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="poidsProduit" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPoidsProduit().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
<?php 

switch ($mode)
    {
		case "ajouter":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight size centre" name="submit" value="'.texte("ajouter").'"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="modifier marginLight size centre" name="submit" value="'.texte("modifier").'"/></div><div class="espace"></div></div>';
                break;
			}
		case "supprimer":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="supprimer marginLight size centre" name="submit" value="'.texte("supprimer").'"/></div><div class="espace"></div></div>';
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