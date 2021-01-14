<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionNotes&mode=ajouter">';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionNotes&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = NotesManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionNotes&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = NotesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idNotes" value="'.$choix->getIdNote().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight size">
            <div class="centre">
                Nom Eleve:
            </div>
            <div>
                <div class="espace"></div>
                <input  name="nomEleve" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomEleve(). " ".$choix->getPrenomEleve().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne size marginLight">
            <div class="centre">
                Note:
            </div>
            <div>
                <div class="espace"></div>
                <input name="noteObtenue" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNoteObtenue().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
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
<div class="marginLight libelle"><a class="centre size" href="index.php?page=ListeNotes">Annuler</a></div>
<div class="espace"></div>
</div>

</form>