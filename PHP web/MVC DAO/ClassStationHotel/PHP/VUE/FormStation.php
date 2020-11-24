<?php

$mode = $_GET["mode"];

switch ($mode)
{
    case "ajoutStation":
    {
        echo '<form action="index.php?code=ActionStation&mode=ajoutStation" method="post">';
        break;
    }

    case "modifierStation":
    {
        echo '<form action="index.php?code=ActionStation&mode=modifierStation" method="post">';
        break;
    }

    case "supprimerStation":
    {
        echo '<form action="index.php?code=ActionStation&mode=supprimerStation" method="post">';
        break;
    }
}

if (isset($_GET['id'])) {
    $station = StationManager::findById($_GET['id']);
}

?>

<input type="hidden" name="idStation" value="<?php if (isset($station)) echo $station->getIdStation(); ?>"/>
<div class="ligneDetail">
    <label for="nom">Nom Station: </label>
    <div class="input"> 
        <input type="text" name="nomStation" value="<?php if (isset($station)) echo $station->getNomStation(); ?>"/>
    </div>
</div>
<div class="ligneDetail">
    <label for="nom">Altitude Station: </label> 
    <div class="input"> 
        <input type="text" name="altitudeStation" value="<?php if (isset($station)) echo $station->getAltitudeStation(); ?>"/>
    </div>
</div>

<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajoutStation":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Ajouter"/>'; 
                break;
			}
		case "modifierStation":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Modifier"/>'; 
                break;
			}
		case "supprimerStation":
			{
                echo '<div class="ligneDetail"><input type="submit" value="Supprimer"/>'; 
                break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
?>
<button class="bouton5 marginTop"><a href="index.php">Retour a la page principale</a></button>';
</div>

</form>

