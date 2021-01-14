<?php

echo '<form method="POST" action="index.php?page=ActionConnexions">
    <div class="contenu colonne">
        <div class="colonne marginLight">
        <div class="colonne marginLight">
            <div class="titreColonne centre size">
                Pseudo Utilisateur
                </div>
                <div>
                    <div class="espace"></div>
                    <input type="text" name="loginUtilisateur" placeholder="Pseudo Utilisateur"/>
                    <div class="espace"></div>
                </div>
            </div>
            <div class="titreColonne centre size marginLight">
                Mot de Passe Utilisateur
                </div>
                <div>
                    <div class="espace"></div>
                    <input type="password" name="motDePasseUtilisateur" placeholder="Mot de passe Utilisateur"/>
                    <div class="espace"></div>
                </div>
            </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="libelle marginLight centre size" name="submit" value="Connection"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';
