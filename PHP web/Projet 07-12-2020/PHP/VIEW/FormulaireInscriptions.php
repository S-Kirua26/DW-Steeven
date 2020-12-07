<?php

$listeRole = RolesManager::getList();

?>

<form method="POST" action="index.php?page=ActionInscription">
<div class="contenu colonne">
    <div class="colonne marginLight">
            
        <div class="centre size" for="nomUser">Nom Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="nomUser" required/>
            <div class="espace"></div>
        </div>
            
    </div>    
    <div class="colonne marginLight">
            
        <div class="centre size" for="prenom">Prenom Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="prenomUser" required/>
            <div class="espace"></div>
        </div>
    </div>      
    <div class="colonne marginLight">
            
        <div class="centre size" for="motDePasse">Mot de Passe Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="motDePasseUser" required/>
            <div class="espace"></div>
        </div>  
    </div>   
    <div class="colonne marginLight">
            
        <div class="centre size" for="confirmationMotDePasse">Confirmation Mot de Passe Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="confirmationMotDePasse" required/>
            <div class="espace"></div>
        </div>
    </div>
    <div class="colonne marginLight">
            
        <div class="centre size" for="age"> Age Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="ageUser" required/>
            <div class="espace"></div>
        </div>
    </div>

    <div class="centre size" for="age">Role Utilisateur:</div>
    <div>
        <div class="espace"></div>
        <select class="libelle marginLight" name="idRole">';

        <?php
            foreach ( $listeRole as $unRole )
            {
                echo '<option value="'.$unRole->getIdRole().'"'.$sel.'>'.$unRole->getNomRole().'</option>';      
            }
        ?>
        </select>
        <div class="espace"></div>
    </div>
    

    <div class="colonne marginLight">
            
        <div class="centre size" for="pseudoUser">Pseudo Utilisateur :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="pseudoUser" required/>
            <div class="espace"></div>
        </div>
    </div>
</div>
<div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeClients">Retour</a></div>
            <div class="espace"></div>
        </div>
<div>
<div class="espace"></div>
<input type="submit" class="ajouter size marginLight centre" name="submit" value="S\'inscrire"/>
<div class="espace"></div>
</div>
</form>