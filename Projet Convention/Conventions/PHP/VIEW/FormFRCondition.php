<section>

    <form action="index.php?page=ActionCondition&mode=ajouter" method="POST">
        <div class="contenu colonne">
            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Comportements Professionnels (note de 1 à 5)</label>
                    <div></div>
                </div>
            </div>
            <?php
                for($i=1; $i<=11; $i++) 
                {
                    $libelle = LibellesComportementsProfessionnelsManager::findById($i);
                    $valeurs = ValeursComportementsProfessionnelsManager::findById($i);
                    echo '<input type="hidden" name = "idLibelleComportementProfessionnel'.$i.'" value='.$valeurs->getIdLibelleComportementProfessionnel().'>';
                    echo '<input type="hidden" name = "idComportementProfessionnel'.$i.'" value='.$valeurs->getIdComportementProfessionnel().'>';
                    echo '<input type="hidden" name = "idStage" value='.$valeurs->getIdStage().'>';
                    
                echo '<div class="row">
                    <div class="info colonne">
                        <div id="libelleComportement" class="blanc centre">
                             <div>'.$libelle->getLibelleComportement().'</div>
                        </div>
                    </div>

                    <div>
                        <input type="range" name="valeurComportement'.$i.'" id="valeurComportement" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                        <datalist id="tickmarks">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
                        </datalist>
                    </div>
                </div>';
                }
            ?>
            

            <div class="espaceHor"></div>
            <div class="espaceHor"></div>

            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Acquis</label>
                    <div></div>
                </div>
            </div>

            <div class="row">
                <div class="info colonne">
                    <div id="libelleAcquis" class="blanc centre">
                        Les tests de ouf
                    </div>
                </div>

                <div>
                    <div>
                        <label>Oui</label>
                        <input type="radio" name="valeurAcquis" value="Oui" checked>
                    </div>
                    <div>
                        <label>Non</label>
                        <input type="radio" name="valeurAcquis" value="Non">
                    </div>
                    <div>
                        <label>A développer</label>
                        <input type="radio" name="valeurAcquis" value="A developper">
                    </div>
                    <div>
                        <label>N'a pas pu être observé</label>
                        <input type="radio" name="valeurAcquis" value="N'a pas pu être observé">
                    </div>
                </div>
            </div>

            <div class="row">
            <div></div>
            <div class="info colonne">
                <button id ="valide" class="bouton" type="submit"><i class="far fa-check-circle"></i> Valider</button>             
            </div>
            <div></div>
        </div>
        </div>
    </form>

</section>