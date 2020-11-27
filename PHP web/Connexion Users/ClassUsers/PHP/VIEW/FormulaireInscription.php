<?php

$mode = $_GET["mode"];

switch ($mode)
{
    case "ajoutUtilisateur":
    {
        echo '<form action="index.php?code=TraitementUtilisateur&mode=ajoutUtilisateur" method="post">';
        break;
    }
}

if (isset($_GET['id'])) {
    $utilisateur = UtilisateursManager::findById($_GET['id']);
}

?>

<input type="hidden" name="idUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getIdUtilisateur(); ?>"/>
<div>
    <label for="nom">Nom Utilisateur: </label>
    <div class="input"> 
        <input type="text" name="nomUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getNomUtilisateur(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Prenom Utilisateur: </label> 
    <div class="input"> 
        <input type="text" name="prenomUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getPrenomUtilisateur(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Mot de Passe Utilisateur: </label> 
    <div class="input">
        <input type="text" name="motDePasseUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getMotDePasseUtilisateur(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Adresse Mail Utilisateur: </label> 
    <div class="input">
        <input type="text" name="adresseMAilUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getAdresseMailUtilisateur(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Role Utilisateur:  </label> 
    <div class="input">
        <input type="text" name="roleUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getRoleUtilisateur(); ?>"/>
    </div>
</div>
<div>
    <label for="nom">Pseudo Utilisateur: </label> 
    <div class="input">
        <input type="text" name="pseudoUtilisateur" value="<?php if (isset($utilisateur)) echo $utilisateur->getPseudoUtilisateur(); ?>"/>
    </div>
</div>

<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajoutUtilisateur":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Ajouter"/>'; 
                break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
?>

<a href="index.php" class=" crudBtn crudBtnRetour">Annuler</a>
</div>

</form>