<?php

echo '<form method="POST" action="index.php?page=traitementConnexion">
    <div class="contenu colonne">
        <div class="colonne marginLight">

            


        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Pseudo Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="pseudoUtilisateur" placeholder="Pseudo Utilisateur"/>
                <div class="espace"></div>
                </div>
            </div>
            <div class="titreColonne centre">
                Mot de passe Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="password" name="motDePasseUtilisateur" placeholder="Mot de passe Utilisateur"/>
                <div class="espace"></div>
            </div>
        </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeConventions">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';
