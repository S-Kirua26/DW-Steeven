
<?php

$_SESSION['pseudo'] = "Operateur";

echo '<h2>Nouvelle production</h2>

<form action="index.php?action=nouvelleProd" method="POST">

    <p><span>Produit par: </span><span>'.$_SESSION['pseudo'].'</span></p>
    <p>
        <label for="reference">Référence: </label>
        <select name="reference" id="reference">';
        
        $references = ReferenceManager::getList();

        foreach($references as $reference){
            echo '<option value="'.$reference->getIdReference().'">'.$reference->getIdReference()." : " .$reference->getNomReference().'</option>';
        }
        
        echo '</select>
    </p>

    <p><label for="quantite">Quantité</label><input type="number" min="1" name="quantite" id="quantite"></p>
    <p><label for="ordrefabrication">Ordre de Fabrication</label><input type="text" name="ordrefabrication" id="ordrefabrication"></p>

    <p><a class="button" href="index.php">Retour</a><button type=submit>Démarrer Production</button></p>
    

</form>';
