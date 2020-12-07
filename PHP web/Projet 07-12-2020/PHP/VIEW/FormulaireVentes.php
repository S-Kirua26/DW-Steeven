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

<?php if($mode != "ajouter") echo  '<input name= "idVente" value="'.$choix->getIdVente().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Id du Representant
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="idRepresentant" placeholder="Id du Representant" value="<?php if ($mode != "ajouter") echo $choix->getIdRepresentant() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                Id du Produit
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="idProduit" placeholder="Id du Produit" value="<?php if ($mode != "ajouter") echo $choix->getIdProduit() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                Id du Client
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="idClient" placeholder="Id du Client" value="<?php if ($mode != "ajouter") echo $choix->getIdClient() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne">
            <div class="titreDescriptif centre">
                Quantite
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="quantite" placeholder="Quantite" value="<?php if ($mode != "ajouter") echo $choix->getQuantite() ;?>"/>
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
<div class="return"><a class="centre size" href="index.php?page=ListeVentes">Retour</a></div>
<div class="espace"></div>
</div>

</form>