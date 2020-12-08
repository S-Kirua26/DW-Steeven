<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionVentes&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = VentesManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionVentes&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = VentesManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionVentes&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = VentesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "IdVente" value="'.$choix->getIdVente().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("idRepresentant");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="IdRepres" <?php if($mode != "ajouter") echo 'value= "'.$choix->getIdRepres().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                <?php echo texte("idProduit");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="IdProduit" <?php if($mode != "ajouter") echo 'value= "'.$choix->getIdProduit().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                <?php echo texte("idClient");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="IdClient" <?php if($mode != "ajouter") echo 'value= "'.$choix->getIdClient().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                <?php echo texte("quantite");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="Quantite" <?php if($mode != "ajouter") echo 'value= "'.$choix->getQuantite().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
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
<div class="return"><a class="centre size" href="index.php?page=ListeVentes">Retour</a></div>
<div class="espace"></div>
</div>

</form>