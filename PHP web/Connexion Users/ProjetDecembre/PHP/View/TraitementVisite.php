<?php

$typeTraitement =$_GET["typeTraitement"];
if ($typeTraitement=="ajouter"){
    $visite = new Visite(["dateVisite"=>$_POST['dateVisite'],"idVisiteur"=>$_POST['idVisiteur'],"idConvention"=>$_POST['idConvention']]);
    var_dump($visite);
    VisiteManager::add($visite);
} 
else if ($typeTraitement=="modifier")
{
    $visite=VisiteManager::findById($_POST['id']);
    $visite->setDateVisite($_POST['dateVisite']);
    $visite->setIdVisiteur($_POST['idVisiteur']);
    $visite->setIdConvention($_POST['idConvention']);

    VisiteManager::update($visite);
} 
else if ($typeTraitement=="supprimer")
{
    $idRecherche=$_GET['id'];
    $id=VisiteManager::findById($idRecherche);
    VisiteManager::delete($id);
}

