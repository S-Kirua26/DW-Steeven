<?php

function chargerClasse($classe)
{
    if (file_exists("Php/Controller/" . $classe . ".Class.php"))
    {
        require "Php/Controller/" . $classe . ".Class.php";
    }
    if (file_exists("Php/Model/" . $classe . ".Class.php"))
    {
        require "Php/Model/" .$classe . ".Class.php";
    }
}
spl_autoload_register("chargerClasse");

function afficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VUE/head.php';
    include 'PHP/VUE/header.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VUE/footer.php';
}

DbConnect::init();

$routes = [
    "default" => ["PHP/VUE/", "PageStation", "Liste des stations et hôtels"],

    "liste" => ["PHP/VUE/", "PageStation", "Liste des stations et hôtels"],
    "ActionStation" => ["PHP/VUE/", "ActionStation", "Actions pour les stations"],
    "DetailStation" => ["PHP/VUE/", "DetailStation", "Detail sur les stations"],
    "FormStation" => ["PHP/VUE/", "FormStation", "Formulaire sur les stations"]
];

if (isset($_GET["code"]))
{

    $code = $_GET["code"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$code]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$code]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}