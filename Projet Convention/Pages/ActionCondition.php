<?php
// $id=$_POST["idComportementProfessionnel"];
    for ($i=1; $i < 12; $i++) { 
        $valeurs = new ValeursComportementsProfessionnels(["idStage"=>$_POST['idStage'], "idLibelleComportementProfessionnel"=>$_POST['idLibelleComportementProfessionnel'.$i], "valeurComportement"=>$_POST['valeurComportement'.$i]]);
        ValeursComportementsProfessionnelsManager::add($valeurs);
    }