<?php

    echo '<div class="row">
            <div class="info colonne">
                <label for="ville">Regions :</label>
                <select id="region">';
                    $listeRegion = RegionsManager::getList(false);
                        foreach($listeRegion as $elt)
                        {
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


    