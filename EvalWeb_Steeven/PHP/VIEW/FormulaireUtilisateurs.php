<?php

$mode = $_GET['mode'];

$listeUtilisateurs = UtilisateursManager::getList();

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
            <div class="size marginLight centre">
                Nom Utilisateur:
            </div>
            <div>
                <div class="espace"></div>
                <input  name="nomUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="size marginLight centre">
                Prenom Utilisateur:
            </div>
            <div>
                <div class="espace"></div>
                <input  name="prenomUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getPrenomUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="size marginLight centre">
                Login Utilisateur:    
            </div>
            <div>
                <div class="espace"></div>
                <input  name="loginUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getLoginUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="size marginLight centre">
                Mot de Passe Utilisateur:
            </div>
            <div>
                <div class="espace"></div>
                <input  name="motDePasseUtilisateur" <?php if($mode != "ajouter") echo 'value= "'.$choix->getMotDePasseUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>

        <div class="colonne marginLight size">
        <div class="centre">
            Role:
        </div>
        <div>
            <div class="espace"></div>
            <select class="libelle marginLight" name="idRole">

            <?php 

            foreach ( $listeUtilisateurs as $unRole )
            {
                if ($mode != "ajouter")
                {
                $sel = "";
                if ($unRole->getIdRole()==$choix->getIdRole())
                {
                    $sel="selected";
                }
            }
                echo '<option value="'.$unRole->getIdRole().'"'.$sel; if($mode=="supprimer") echo'disabled'; echo '>'.$unRole->getNomRole().'</option>';
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
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight size centre" name="submit" value="ajouter"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="modifier marginLight size centre" name="submit" value="modifier"/></div><div class="espace"></div></div>';
                break;
			}
		case "supprimer":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="supprimer marginLight size centre" name="submit" value="supprimer"/></div><div class="espace"></div></div>';
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
<div class="return libelle"><a class="centre size" href="index.php?page=ListeUtilisateurs">Annuler</a></div>
<div class="espace"></div>
</div>

</form>