<?php

include "head.php";
include "header.php";

echo '<form action"AjoutBdd.php" method="post">
    <div>
        <label for="nom">Libelle : </label> 
        <input name="libelleProduit">
    </div>
    <div>
        <label for="nom">Prix : </label> 
        <input name="prix">
    </div>
    <div>
        <label for="nom">Date de Peremption : </label> 
        <input name="dateDePeremption">
    </div>
    <div class="btn"> 
        <button type="submit">Ajouter</button>
        <button type="reset"><a href="pagePrincipale.php">Annuler</a></button>
    </div>';


include "footer.php";