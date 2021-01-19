<?php

echo '<select>';
    $listeRegion = RegionsManager::getList(false);
            foreach($listeRegion as $elt){
                    $sel="";
                    echo '<option value="'.$elt->getIdRegion().'"'.$sel.'>'.$elt->getLibelleRegion().'</option>';
                }
            ?>
    </select>


    <select>
    <?php
    $listeDepartement = DepartementsManager::getList(false);
            foreach($listeDepartement as $elt){
                    $sel="";
                    echo '<option value="'.$elt->getIdDepartement().'"'.$sel.'>'.$elt->getLibelleDepartement().'</option>';
                }
            ?>
    </select>

    <select>
    <?php
    $listeRegion = RegionsManager::getList(false);
    // $idRegion = RegionsManager::findById($_GET['id']);
    // $idDepartement = DepartementsManager::findById($_GET['id']);

            foreach($listeRegion as $elt){
                    echo '<option value="'.$elt->getIdRegion().'" type="R">'.$elt->getLibelleRegion().'</option>';
                    $listeDepartement = DepartementsManager::getByRegion($elt->getIdRegion());

                    foreach($listeDepartement as $dep)
                    {
                        if($dep->getLibelleDepartement() == "Nord")
                        {
                            $sel="selected";
                        }
                        else{
                            $sel="";
                        }
                        echo '<option value="'.$dep->getIdDepartement().'" type="D" '.$sel.'>&nbsp &nbsp &nbsp'.$dep->getLibelleDepartement().'</option>'; 
                        
                    }
                }
            ?>
    </select>


    