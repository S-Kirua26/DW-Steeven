<?php
$liste = CategoriesManager2::getList();
?>
    <div id="crudBarreOutil">
        <a class=" crudBtn crudBtnOutil" href='index2.php?code=FormCategorie&mode=ajoutCategorie'>Ajouter</a>
    </div>
    <div id="crudTableau">
        <table>
            <thead >
                <th class="crudColonne">Libellé</th>
            </thead>
            <?php foreach ($liste as $elt)
                    {
                        echo '<tr>';
                        echo '<td class="crudColonne">' . $elt->getLibelleCategorie() . '</td>';
            ?>
            <td>
                <a class=" crudBtn crudBtnEdit"
                    href='index2.php?code=FormCategorie&mode=detailCategorie&id=<?php echo $elt->getIdCategorie(); ?>'>Afficher </a>
                <a class=" crudBtn crudBtnModif"
                    href='index2.php?code=FormCategorie&mode=modifierCategorie&id=<?php echo $elt->getIdCategorie(); ?>'>Modifier</a>
                <a class=" crudBtn crudBtnSuppr"
                    href='index2.php?code=FormCategorie&mode=supprimerCategorie&id=<?php echo $elt->getIdCategorie(); ?>'>Supprimer</a></td>
            </tr>
            <?php }?>

        </table>
    </div>