<?php

$typeTraitement =$_GET["typeTraitement"];
if ($typeTraitement=="ajouter"){
    $visiteur= new Utilisateurs(["nomUtilisateur"=>$_POST['nomUtilisateur'],"prenomUtilisateur"=>$_POST['prenomUtilisateur'],"motDePasseUtilisateur"=>$_POST['motDePasseUtilisateur'],"adresseMailUtilisateur"=>$_POST['adresseMailUtilisateur'],"pseudoUtilisateur"=>$_POST['pseudoUtilisateur'],"roleUtilisateur"=>$_POST['roleUtilisateur']]);
    var_dump($visiteur);
    UtilisateursManager::add($visiteur);
}