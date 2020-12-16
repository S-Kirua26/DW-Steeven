<?php

$listeRole = RolesManager::getList();

?>

<form method="POST" action="index.php?page=ActionInscriptions">
<div class="contenu colonne">
    <div class="colonne marginLight">
            
        <div class="centre size" for="nomUtilisateur"><?php echo texte("nomUtilisateur");?></div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="nomUtilisateur" required/>
            <div class="espace"></div>
        </div>
            
    </div>    
    <div class="colonne marginLight">
            
        <div class="centre size" for="prenom"><?php echo texte("prenomUtilisateur");?></div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="prenomUtilisateur" required/>
            <div class="espace"></div>
        </div>
    </div>      
    <div class="colonne marginLight">
            
        <div class="centre size" for="motDePasse"><?php echo texte("motDePasseUtilisateur");?></div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="motDePasseUtilisateur" required/>
            <div class="espace"></div>
        </div>  
    </div>   
    <div class="colonne marginLight">
            
            <div class="centre size" for="confirmationMotDePasse"><?php echo texte("confirmMDPUtilisateur");?></div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="confirmationMotDePasse" required/>
                <div class="espace"></div>
            </div>
        </div>
    <div class="colonne marginLight">
            
        <div class="centre size" for="age"><?php echo texte("ageUtilisateur");?></div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="ageUtilisateur" required/>
            <div class="espace"></div>
        </div>
    </div>
    <div class="colonne marginLight">
            
        <div class="centre size" for="pseudoUtilisateur"><?php echo texte("pseudoUtilisateur");?></div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="pseudoUtilisateur" required/>
            <div class="espace"></div>
        </div>
    </div>

    <div class="centre size" for="age"><?php echo texte("role");?></div>
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
</div>

<div>
    <div class="espace"></div>
    <div class="return marginLight"><a class="centre" href="index.php?page=listeClients"><?php echo texte("retour");?></a></div>
    <div class="espace"></div>
</div>

<div>
    <div class="espace"></div>
    <input type="submit" class="ajouter size marginLight centre" name="submit" value="<?php echo texte("inscription");?>"/>
    <div class="espace"></div>
</div>
</form>