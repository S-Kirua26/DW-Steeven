<?php

$typeTraitement =$_GET["typeTraitement"];
if ($typeTraitement=="ajouter")
{
    $salle= new Salles(["nomSalle"=>$_POST['nomSalle'],"adresseSalle"=>$_POST['adresseSalle'],"villeSalle"=>$_POST['villeSalle']]);
    var_dump($salle);
    SallesManager::add($salle);
} 

else if ($typeTraitement=="modifier")
{
    var_dump($_POST['id']);
    $salle=SallesManager::findById($_POST['id']);
    var_dump($salle);
    $salle->setNomSalle($_POST['nomSalle']);
    $salle->setAdresseSalle($_POST['adresseSalle']);
    $salle->setVilleSalle($_POST['villeSalle']);

    SallesManager::update($salle);
} 

else if ($typeTraitement=="supprimer")
{
    $idRecherche=$_GET['id'];
    $id=SallesManager::findById($idRecherche);
    SallesManager::delete($id);
}

header("location: index.php?page=listeSalles");