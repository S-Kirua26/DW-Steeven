<?php
$siret=$_POST['numeroSiret'];
// $siret= "81897909800006";
$entreprise = EntreprisesManager::getByNumSiret($siret,true);
echo json_encode($entreprise);

?>


