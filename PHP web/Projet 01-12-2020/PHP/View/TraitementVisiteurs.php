<?php

$typeTraitement =$_GET["typeTraitement"];
if ($typeTraitement=="ajouter"){
    $visiteur= new Visiteurs(["nomVisiteur"=>$_POST['nomVisiteur'],"prenomVisiteur"=>$_POST['prenomVisiteur'],"adresseVisiteur"=>$_POST['adresseVisiteur'],"codePostalVisiteur"=>$_POST['codePostalVisiteur'],"villeVisiteur"=>$_POST['villeVisiteur']]);
    var_dump($visiteur);
    VisiteursManager::add($visiteur);
} else if ($typeTraitement=="modifier"){
    var_dump($_POST['id']);
    $visiteur=VisiteursManager::findById($_POST['id']);
    var_dump($visiteur);
    $visiteur->setNomVisiteur($_POST['nomVisiteur']);
    $visiteur->setPrenomVisiteur($_POST['prenomVisiteur']);
    $visiteur->setAdresseVisiteur($_POST['adresseVisiteur']);
    $visiteur->setCodePostalVisiteur($_POST['codePostalVisiteur']);
    $visiteur->setVilleVisiteur($_POST['villeVisiteur']);

    VisiteursManager::update($visiteur);
} else if ($typeTraitement=="supprimer")
{
    $idRecherche=$_GET['id'];
    $id=VisiteursManager::findById($idRecherche);
    VisiteursManager::delete($id);
}

header("location:index.php?listeVisiteurs");