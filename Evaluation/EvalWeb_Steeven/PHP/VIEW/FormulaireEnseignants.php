<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionEnseignants&mode=ajouter">';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionEnseignants&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = EnseignantsManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionEnseignants&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = EnseignantsManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idEnseignant" value="'.$choix->getIdEnseignant().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="centre size">
                Nom:
            </div>
            <div>
                <div class="espace"></div>
                <input name="nomEnseignant" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomEnseignant().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne marginLight">
            <div class="centre size">
                Prenom:
            </div>
            <div>
                <div class="espace"></div>
                <input name="prenomEnseignant" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPrenomEnseignant().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne marginLight">
            <div class="centre size">
                Matiere:
            </div>
            <div>
                <div class="espace"></div>
                <input name="libelleMatiere" <?php if($mode != "ajouter") echo 'value= "'.$choix->getLibelleMatiere().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
        <div class="contenu colonne marginLight">
            <div class="centre size">
                Pseudo:
            </div>
            <div>
                <div class="espace"></div>
                <input name="pseudo" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPseudoEnseignant().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
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
<div class="libelle marginLight"><a class="centre size" href="index.php?page=ListeEnseignants">Annuler</a></div>
<div class="espace"></div>
</div>

</form>