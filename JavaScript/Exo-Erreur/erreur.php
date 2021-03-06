<?php
include "head.php";
echo '<body>
<div class="page">
    <div class="espaceLigth"></div>
    <div id="degrade" class="colonne">
        <div class="centre titre">Champs du formulaire</div>
        <form>
            <fieldset>
                <legend>Coordonnées à renseigner</legend>
                <div class="ligne">
                    <div>
                        <label id="genres" for="genre">Genre : </label>
                        <div id="allRadio">
                            <div class="inputLabel">
                                <input type="radio" id="madame" name="genre" required checked>
                                <label class ="genre" for="dame">Mme</label>
                            </div>
                            <div class="inputLabel">
                                <input type="radio" id="mademoiselle" name="genre" required>
                                <label class ="genre" for="demoiselle">Mlle</label>
                            </div>
                            <div class="inputLabel">
                                <input type="radio" id="monsieur" name="genre" required>
                                <label class ="genre" for="hommes">Mr</label>
                            </div>
                        </div>
                        <span class="message"></span>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Nom: </label>
                        <input id="input1" class="checkInput" type="text" title="Veuillez renseigner votre nom (ex: Michel)" pattern="[a-zA-Z \'-]{3,}" required/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre nom (ex: Michel)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divName" class="message"></div>
                    </div>  
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Code Postal: </label>
                        <input id="input2" class="checkInput" type="text" title="Au moins 5 chiffres attendues (ex: 59820)" pattern="\d{5}" required/>
                        <span></span>
                        <div class="interrogation" title="Au moins 5 chiffres attendues (ex: 59820)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divPostal" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Ville: </label>
                        <input id="input3" class="checkInput" type="text" title="Veuillez renseigner votre ville (ex: Limoges)" pattern="[a-zA-Z \'-]{3,}" required/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre ville (ex: Limoges)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divVille" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Date de Naissance: </label>
                        <input id="input4" class="checkInput" type="date" title="Veuillez renseigner votre date de naissance (ex: 24/05/1988)" pattern="[0-3][0-9]+\/[0-1][0-9]+\/[1-2][0-9][0-9][0-9]"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre date de naissance (ex: 24/05/1988)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divNaissance" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Numero de Telephone: </label>
                        <input id="input5" class="checkInput" type="text" title="Veuillez renseigner votre numero de telephone (ex: 00011223344)" required pattern="(0|\\+33|0033)[1-9][0-9]{8}"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre numero de telephone (ex: 00011223344)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divNumTel" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre adresse Mail </label>
                        <input id="input6" class="checkInput" type="text" title="Veuillez renseigner votre adresse mail (ex: Michel@gmailcom)" required pattern="[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre adresse mail (ex: Michel@gmailcom)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divAdresseMail" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Mot de Passe </label>
                        <input id="input7" class="checkInput" type="password" title="Veuillez renseigner votre mot de passe (ex: MdpMichel!)" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez renseigner votre mot de passe (ex: MdpMichel!)"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="oeil"><img src="./oeil.png"/></div>
                        <div id="divMotDePasse" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Confirmer votre mot de passe </label>
                        <input id="input8" class="checkInput" type="password" title="Veuillez confirmer votre mot de passe" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez confirmer votre mot de passe"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divConfirmMDP" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre commentaire </label>
                        <input id="input9" class="checkInput" type="text" title="Veuillez entrez votre commentaire"/>
                        <span></span>
                        <div class="interrogation" title="Veuillez entrez votre commentaireconfirmer votre mot de passe"><img src="./interrogation.jpg" /></div>
                        <div class="boutonVert"><img src="./vert.jpg" /></div>
                        <div class="boutonRouge"><img src="./rouge.png" /></div>
                        <div id="divCommentaire" class="message"></div>
                    </div>
                </div>
                <hr>
                <div class="bouton">
                    <button id="appuie" type="submit ">Valider</button>
                    <button type="submit">Annuler</button>
                </div>
            </fielset>
        </form>
    </div>
    <div class="espaceLigth"></div>
   
<script src="erreur.js"></script>
</body>
</html>';