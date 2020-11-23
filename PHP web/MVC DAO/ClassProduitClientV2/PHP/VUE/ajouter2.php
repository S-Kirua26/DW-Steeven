<?php

echo '<form action"ajoutBdd2.php" method="post">
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
        <button type="reset"><a href="index2.php">Annuler</a></button>
    </div>';
