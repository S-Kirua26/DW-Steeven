<?php

echo '<form method="POST" action="index.php?page=ActionConnexions">
    <div class="contenu colonne">
        <div class="colonne marginLight">
        <div class="colonne marginLight">
            <div class="titreColonne centre size">
                '.texte("pseudoUtilisateur").'
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="pseudoUtilisateur" placeholder="Pseudo Utilisateur"/>
                <div class="espace"></div>
                </div>
            </div>
            <div class="titreColonne centre size">
                '.texte("motdePasseUtilisateur").'
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="password" name="motDePasseUtilisateur" placeholder="Mot de passe Utilisateur"/>
                <div class="espace"></div>
            </div>
        </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre size" href="index.php?page=FormulaireConnexions">'.texte("retour").'</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre size" name="submit" value="'.texte("connection").'"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';
