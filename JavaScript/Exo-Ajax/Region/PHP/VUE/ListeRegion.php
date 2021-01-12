<?php
$liste = RegionManager::getList(false);
?>
    <div class="contenu">
    <div class="espace"></div>
    <select>
        <?php

        foreach($liste as $elt){
            $sel="";
            echo '<option value="'.$elt->getIdRegion().'"'.$sel.'>'.$elt->getLibelleRegion().'</option>';
        }
        ?>
    </select>
    <div class="espace"></div>
    </div>
</div>
<div class="espaceHorizon fondBlanc"></div>