<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionClients&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = ClientsManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionClients&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = ClientsManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionClients&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = ClientsManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idClient" value="'.$choix->getIdClient().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom du Client
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="nomClient" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomClient().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Ville du Client
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="villeClient" <?php if($mode != "ajouter") echo 'value= "'.$choix->getVilleClient().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
<?php 

switch ($mode)
    {
		case "ajouter":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight size centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="modifier marginLight size centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
                break;
			}
		case "supprimer":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="supprimer marginLight size centre" name="submit" value="Supprimer"/></div><div class="espace"></div></div>';
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
<div class="return"><a class="centre size" href="index.php?page=ListeClients">Retour</a></div>
<div class="espace"></div>
</div>

</form>