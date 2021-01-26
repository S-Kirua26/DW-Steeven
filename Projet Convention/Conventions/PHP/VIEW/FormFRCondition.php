<section>

    <form action="index.php?page=ActionCondition&mode=ajouter" method="POST">
        <div class="contenu colonne">
            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Comportements Professionnels</label>
                    <div></div>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <div id="libellePonctualite" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(1);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="ponctualite" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Présentation, tenue compatible avec l'environnement professionnel</label> -->
                    <div id="libellePresentation" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(2);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="presentation" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Adaptation, intégration à l'équipe</label> -->
                    <div id="libelleAdaptation" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(3);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="adaptation" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Etablir des relations professionelle avec l'environnement de travail</label> -->
                    <div id="libelleRelationPro" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(4);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="relationPro" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Communiquer, rendre compte de son travail</label> -->
                    <div id="libelleCommunication" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(5);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="communication" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Réaliser des tâches de manière autonome</label> -->
                    <div id="libelleTacheAutonome" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(6);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="tacheAutonome" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Respecter les consignes</label> -->
                    <div id="libelleRespectConsigne" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(7);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="respectConsigne" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Respecter le matériel et l'environnement technique</label> -->
                    <div id="libelleRespectMateriel" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(8);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="respectMateriel" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Agir de façon organisée et méthodique</label> -->
                    <div id="libelleAgir" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(9);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="agir" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Respecté les critère qualité de l'entreprise</label> -->
                    <div id="libelleRespectCritere" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(10);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="respectCritere" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="info colonne">
                    <!-- <label>Respect des règles d'hygiène et de sécurité</label> -->
                    <div id="libelleRespectHygiene" class="blanc centre">
                        <?php
                            $test = LibellesComportementsProfessionnelsManager::findById(11);
                            echo ($test->getLibelleComportement());
                        ?>
                    </div>
                </div>
                <div>
                    <input type="range" name="valeurComportement" id="respectHygiene" min="1" max="5" step="1" list="tickmarks" style="width:50%">
                    <datalist id="tickmarks">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    </datalist>
                </div>
            </div>

            <div class="espaceHor"></div>
            <div class="espaceHor"></div>

            <div class="row">
                <div class="info colonne titreColonne">
                    <label>Les Acquis</label>
                    <div></div>
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