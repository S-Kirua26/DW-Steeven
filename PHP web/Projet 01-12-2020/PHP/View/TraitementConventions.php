<?php

$typeTraitement =$_GET["typeTraitement"];
if ($typeTraitement=="ajouter"){
    $convention= new Conventions(["nomConvention"=>$_POST['nomConvention'],"categorieConvention"=>$_POST['categorieConvention'],"idSalle"=>$_POST['idSalle'],]);
    ConventionsManager::add($convention);
} else if ($typeTraitement=="modifier"){
    $convention=ConventionsManager::findById($_POST['id']);
    $convention->setNomConvention($_POST['nomConvention']);
    $convention->setCategorieConvention($_POST['categorieConvention']);
    $convention->setIdSalle($_POST['idSalle']);

    ConventionsManager::update($convention);
} else if ($typeTraitement=="supprimer")
{
    $idRecherche=$_GET['id'];
    $id=ConventionsManager::findById($idRecherche);
    ConventionsManager::delete($id);
}

header("location:index.php?listeConventions");