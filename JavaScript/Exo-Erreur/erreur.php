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
                        <input id="input1" type="text" title="Veuillez renseigner votre prenom (ex: Michel)" required/>
                        <span id="spanName"></span>
                        <img src="./interrogation.jpg" alt="image d\'un point d\'interrogation"><br>
                    </div>  
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Code Postal: </label>
                        <input id="input2" type="text" title="Au moins 5 chiffres attendues" required/>
                        <span id="spanPostal"></span>
                        <img src="./interrogation.jpg" alt="image d\'un point d\'interrogation"><br>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Ville: </label>
                        <input id="input3" type="text" title="Veuillez renseigner votre ville (ex: Limoges)" required/>
                        <span id="spanVille"></span>
                        <img src="./interrogation.jpg" alt="image d\'un point d\'interrogation"><br>
                    </div>
                </div>
                <hr>
                <div class="ligne colonne">
                    <div>
                        <label>Votre Date de Naissance: </label>
                        <input id="input4" type="date" title="Veuillez renseigner votre date de naissance (ex: 24/05/1988)">
                        <span id="spanDateNaissance"></span>
                        <img src="./interrogation.jpg" alt="image d\'un point d\'interrogation"><br>
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