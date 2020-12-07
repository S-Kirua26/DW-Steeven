<?php

$ventes = VentesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre" href="index.php?page=FormulaireVentes&mode=ajouter">Ajouter Vente</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($ventes as $uneVente)
        {
            echo '<div class="liste marginLight">
            <div class="libelle marginBouton">'.$uneVente->getNomVente().'</div>
            <div class="details marginBouton"><a class="centre" href="index.php?page=formulaireVentes&mode=details&id='.$uneVente->getIdVente().'">Aller voir une Vente</a></div>
            <div class="modifier marginBouton"><a class="centre" href="index.php?page=formulaireVentes&mode=modifier&id='.$uneVente->getIdVente().'">Aller modifier une Vente</a></div>
            <div class="supprimer marginBouton"><a class="centre" href="index.php?page=TraitementVentes&mode=supprimer&id='.$uneVente->getIdVente().'">Aller supprimer une Vente</a></div>
            </div>';
        }
 
echo '</div>

</body>

</html>';