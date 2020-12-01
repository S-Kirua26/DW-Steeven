<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");


    include 'PHP/VIEW/head.php';

DbConnect::init();
// Recherche par Id
echo 'Recherche id=1'.'<br>';
$p = SallesManager::findById(1);
var_dump($p);

//  //on teste l'ajout
//  echo"ajout d'une salle".'<br>';
//  $pnew = new Salles(["nomSalle"=>"Arena", "adresseSalle"=>"12 rue plutarque", "villeSalle"=>"Meudon"]);
//  SallesManager::add($pnew);
//  var_dump($pnew);

//  //On affiche la liste des salles
//  echo"Liste des salles".'<br>';
//  $tableau= SallesManager::getList();
//  foreach($tableau as $uneSalle)
//  {
//      echo $uneSalle->toString().'<br>';
//  }

// //On teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setNomSalle($p->getNomSalle() . 'sss');
// SallesManager::update($p);
// $pRecharge = SallesManager::findById(1);
// var_dump($pRecharge);

//  // on teste la suppression
//  echo "on supprime une salle" . '<br>';
//  $pSuppr = SallesManager::findById(4);
//  SallesManager::delete($pSuppr);

//on affiche la liste des salles
echo "liste des salles" . '<br>';
$tableau = sallesManager::getList();
foreach ($tableau as $uneSalle)
{
    echo $uneSalle->toString() . '<br>';
}