<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionEleves&mode=ajouter">';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionEleves&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = ElevesManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionEleves&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = ElevesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idEleve" value="'.$choix->getIdEleve().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="centre size">
                Nom:
            </div>
            <div>
                <div class="espace"></div>
                <input  name="nomEleve" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomEleve().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne marginLight">
            <div class="centre size">
                Prenom:
            </div>
            <div>
                <div class="espace"></div>
                <input name="prenomEleve" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPrenomEleve().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne marginLight">
            <div class="centre size">
                Classe:
            </div>
            <div>
                <div class="espace"></div>
                <input name="classe" <?php if($mode != "ajouter") echo 'value= "'.$choix->getClasse().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
    </div>
<?php 

switch ($mode)
    {
		case "ajouter":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="libelle marginLight size centre" name="submit" value="ajouter"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="libelle marginLight size centre" name="submit" value="modifier"/></div><div class="espace"></div></div>';
                break;
			}
		case "supprimer":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="libelle marginLight size centre" name="submit" value="supprimer"/></div><div class="espace"></div></div>';
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
<div class=" libelle marginLight"><a class="centre size" href="index.php?page=ListeEleves">annuler</a></div>
<div class="espace"></div>
</div>

</form>