<?php
include "head.php";
echo '<body>
<div class="page">
    <div class="espace"></div>
    <div id="degrade" class="colonne">
        <div class="centre titre">Champs du formulaire</div>
        <form>
            <fieldset>
                <legend>Coordonnées à renseigner</legend>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Nom: </label>
                        <input id="input1" class="checkInput" type="text" title="Veuillez renseigner votre prenom (ex: Michel)" pattern="[a-zA-Z \'-]{3,}" required/>
                        <span></span>
                        <div id="divName"></div>
                    </div>  
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Code Postal: </label>
                        <input id="input2" class="checkInput" type="text" title="Au moins 5 chiffres attendues" pattern="\d{5}" required/>
                        <span></span>
                        <div id="divPostal"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Ville: </label>
                        <input id="input3" class="checkInput" type="text" title="Veuillez renseigner votre ville (ex: Limoges)" pattern="[a-zA-Z \'-]{3,}" required/>
                        <span></span>
                        <div id="divVille"></div>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Date de Naissance: </label>
                        <input id="input4" class="checkInput" type="date" title="Veuillez renseigner votre date de naissance (ex: 24/05/1988)" pattern="[0-3][0-9]+\/[0-1][0-9]+\/[1-2][0-9][0-9][0-9]"/>
                        <span></span>
                        <div id="divNaissance"></div>
                    </div>
                </div>
                <hr>
            </fielset>
        </form>
        <div>
            <input type="button" value="Envoyer"<br>
        </div>
    </div>
    <div class="espace"></div>
   
<script src="erreur.js"></script>
</body>
</html>';