<?php

$typeTraitement =$_GET["typeTraitement"];
var_dump($typeTraitement);
if ($typeTraitement=="ajouter"){
    $visiteur= new Utilisateurs($_POST);
    $visiteur->setMotDePasseUtilisateur(crypte($visiteur->getMotDePasseUtilisateur()));
    var_dump($visiteur);
    UtilisateursManager::add($visiteur);
}