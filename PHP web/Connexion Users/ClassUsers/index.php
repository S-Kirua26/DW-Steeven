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

DbConnect::init();


function afficherPage($page)
{
    $chemin=$page[0];
    $nom=$page[1];
    $titre=$page[2];

    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    include $chemin.$nom.'.php';
}



$routes=[
    "default"=>["PHP/VIEW/","formulaireConnection","Page Inscription"],
    "FormulaireInscription"=>["PHP/VIEW/","FormulaireInscription","Formulaire des Inscriptions"],
    "FormulaireConnection"=>["PHP/VIEW/","FormulaireConnection","Formulaire des Connections"],
    "TraitementInscription"=>["PHP/VIEW/","TraitementInscription","Traitement des Inscriptions"],
    "TraitementConnection"=>["PHP/VIEW/","TraitementConnection","Traitement des Connections"]
];

if(isset($_GET["page"]))
{

    $page=$_GET["page"];

    if (isset($routes[$page]))
    {
        AfficherPage($routes[$page]);
    }
    else{
        AfficherPage($routes["default"]);
    }
}
else
{
    AfficherPage($routes["default"]);
}