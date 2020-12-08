<?php

$ventes = VentesManager::getList();

echo '<body class="colonne">

    <div class="contenu colonne">
        <div class="margin">
            <div class="espace"></div>
            <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireVentes&mode=ajouter">'.texte("ajouterVente").'</a></div>
            <div class="espace"></div>
        </div>';
        foreach ($ventes as $uneVente)
        {
            if ($uneVente->getIdVente()!=1)
            {

                echo '<div class="liste marginLight">
                <div class="libelle centre marginBouton">'.$uneVente->getIdVente().'</div>
                <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireVentes&mode=details&id='.$uneVente->getIdVente().'">'.texte("detailVente").'</a></div>
                <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireVentes&mode=modifier&id='.$uneVente->getIdVente().'">'.texte("modifierVente").'</a></div>';

                if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==2)
                {
                echo '<div class="supprimer marginBouton"><a class="centre size" href="index.php?page=ActionVentes&mode=supprimer&id='.$uneVente->getIdVente().'">'.texte("supprimerVente").'</a></div>';
                }
                echo '</div>';
            }
        }
 
echo '</div>

</body>

</html>';