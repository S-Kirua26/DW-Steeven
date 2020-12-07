<?php

echo '
<div class = "contenu colonne">
<div>
<div class="espace"></div>
<div class="size centre titre">Liste des Categories</div>
<div class="espace"></div>
</div>
    <div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireCategories&mode=ajouter">Ajouter une catégorie</a></div>
    <div class="espace"></div>
</div>';

$liste = CategoriesManager::getList();
foreach($liste as $elt)
{
    if ($elt->getIdCategorie()!=1)
    {
        echo'<div class="liste">
        <div class="espace"></div>
        <div class="libelle centre marginBouton size">'.$elt->getNomCategorie().'</div>
        <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=afficher&id='.$elt->getIdCategorie().'">Details</a></div>';
        
        if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
        {
            echo '<div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=modifier&id='.$elt->getIdCategorie().'">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCategories&mode=supprimer&id='.$elt->getIdCategorie().'">Supprimer</a></div>';
        }

        echo '<div class="espace"></div></div>
        <div class="margin">
        </div>';
    }
}
echo'</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
<div class="espace"></div>
</div>
</body>

</html>';