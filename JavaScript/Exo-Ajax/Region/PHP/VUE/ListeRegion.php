<?php
$liste = RegionManager::getList(false);
?>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href="/Region/PHP/CONTROLLER/Routes.php?mode=ajout" >Ajouter </a>
</div>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  >Nom</th>
                <th class="crudColonne"  >Prenom</th>
			</thead>
			<?php foreach ($liste as $elt) {
    echo '<tr class="crudLigne">';

    echo '<td class="crudColonne">' . $elt->getLibelleRegion() . '</td>';

    ?>
				<td class="crudColonneBtn">
                    <a class=" crudBtn crudBtnEdit" >Afficher </a>
				<a class=" crudBtn crudBtnModif" >Modifier</a>
				<a class=" crudBtn crudBtnSuppr" >Supprimer</a></td>
			</tr>
			<?php }?>
				<tr class="crudLigne">
				<td>total : </td>	
					<td id="total"></td>
				</tr>
		</table>

		
	</div>


</div>
<div class="espaceHorizon fondBlanc"></div>