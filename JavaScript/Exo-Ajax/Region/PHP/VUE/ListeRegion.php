<?php
$liste = RegionManager::getList(false);
?>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href="/Region/PHP/CONTROLLER/Routes.php?mode=ajout" >Ajouter </a>
</div>
    
    <div class="contenuBDD colonne">
        <div class="espace"></div>
        <div class="contenuRegion">
            <div class="nomColonne">
                <div class="libelleColonne">Libelle Regions</div>
                <div class="modification">Modifications</div>
            </div>
        </div>

        <?php foreach ($liste as $elt) {
            echo '<div class="ligne"></div>';

            echo '<div class="">' . $elt->getLibelleRegion() . '</div>';
        ?>

        <div class="affichage">
            <div class="details">Details</div>
            <div class="modifier">Modifier</div>
            <div class="supprimer">Supprimer</div>
        </div>
        <?php }?>
    </div>


</div>
<div class="espaceHorizon fondBlanc"></div>