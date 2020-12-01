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
$titre="test";

    include 'PHP/VIEW/head.php';

DbConnect::init();

// $tableau=SallesManager::getList();
// foreach ($tableau as $uneVisite)
// {
//     echo $uneVisite->toString().'<br>';
// }

//  echo 'recherche id = 1' . '<br>';
//  $p = SallesManager::findById(1);
//  var_dump($p);

// echo "Liste des article" . '<br>';
// $tableau = SallesManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

echo "on met à jour l'id 1" . '<br>';
// $p->setNomSalle($p->getNomSalle() . 'lololololo');
// SallesManager::update($p);
// $pRecharge = SallesManager::findById(1);
// var_dump($pRecharge);

// echo "on supprime un article" . '<br>';
// $pSuppr = SallesManager::findById(4);
// SallesManager::delete($pSuppr);

// // echo "liste des articles" . '<br>';
// $tableau = SallesManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }
