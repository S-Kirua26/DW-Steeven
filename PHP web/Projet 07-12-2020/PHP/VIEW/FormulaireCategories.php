<?php

$mode= $_GET['mode'];

switch($mode)
{
    case "ajouter":
    {
        echo '<form action="index.php?page=ActionCategories&mode=ajouter" method="POST">';
        break;
    }
    case "afficher":
    {
        echo '<form action="index.php?page=ActionCategories&mode=afficher" method="POST">';
            break;
    }
    case "modifier":
    {
        echo '<form action="index.php?page=ActionCategories&mode=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form method="POST" action="index.php?page=ActionCategories&mode=supprimer">';
        break;
    }
}

if (isset($_GET['id']))
{
$choix = CategoriesManager::findById($_GET['id']);
}

?>
<?php if($mode != "ajouter") echo  '<input name= "idCategorie" value="'.$choix->getIdCategorie().'" type= "hidden">';?>
<label for="nomCategorie">Nom Categorie: </label>
<input name="nomCategorie" <?php if($mode!="ajouter"){echo'value="'.$choix->getNomCategorie().'"';} else{echo'placeholder="nom catégorie"';}if($mode=="supprimer"|| $mode=="afficher")echo'disabled';?>>
<label for="ordonnanceCategorie">Ordonnance Categorie: </label>
<input name="ordonnanceCategorie" <?php if($mode!="ajouter"){echo'value="'.$choix->getOrdonnanceCategorie().'"';} else{echo'placeholder="ordonnance catégorie"';}if($mode=="supprimer"|| $mode=="afficher")echo'disabled';?>>

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
<div class="return"><a class="centre size" href="index.php?page=ListeCategories">Retour</a></div>
<div class="espace"></div>
</div>

</form>