<?php

$listeRegion = RegionsManager::getList(false);
$listeDepartement = DepartementsManager::getList(false);

echo '<option value="'.$elt->getIdRegion().'"'.$sel.'>'.$elt->getLibelleRegion().'</option>';
echo '<option value="'.$elt->getIdDepartement().'"'.$sel.'>'.$elt->getLibelleDepartement().'</option>';