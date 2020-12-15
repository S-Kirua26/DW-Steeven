<?php

$mode = $_GET['mode'];

$listeRoles = RolesManager::getList();

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateurs&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateurs&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateurs&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = UtilisateursManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idUtilisateur" value="'.$choix->getIdUtilisateur().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("nomUtilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="nomUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomUtilisateur().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("prenomUtilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="prenomUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPrenomUtilisateur().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("ageUtilisateur");?>    
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="ageUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getAgeUtilisateur().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("pseudoUtilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="pseudoUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPseudoUtilisateur().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("motDePasseUtilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" name="motDePasseUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getMotDePasseUtilisateur().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>

        <div class="colonne marginLight">
        <div class="titreDescriptif centre">
            <?php echo texte("role");?>
        </div>
        <div>
            <div class="espace"></div>
            <select class="libelle marginLight" name="IdRole">

            <?php 

            foreach ( $listeRoles as $unRole )
            {
                if ($mode != "ajouter")
                {
                $sel = "";
                if ($unRole->getIdRole()==$choix->getIdRole())
                {
                    $sel="selected";
                }
            }
                echo '<option value="'.$unRole->getIdRole().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unRole->getNomRole().'</option>';
            }
            ?>

            </select>
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
<div class="return"><a class="centre size" href="index.php?page=ListeUtilisateurs">Retour</a></div>
<div class="espace"></div>
</div>

</form>