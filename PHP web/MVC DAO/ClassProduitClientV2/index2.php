<?php

function chargerClasse($classe)
{
    if (file_exists("Php/Controller/" . $classe . ".Class.php"))
    {
        require "Php/Controller/" . $classe . ".Class.php";
    }
    if (file_exists("Php/Model/" . $classe . ".Class.php"))
    {
        require "Php/Model/" . $classe . ".Class.php";
    }
}
spl_autoload_register("chargerClasse");


/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VUE/head2.php';
    include 'PHP/VUE/header2.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VUE/footer2.php';
}

DbConnect2::init();

/* création d'un tableau de redirection, en fonction du code, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VUE/", "pagePrincipale2", "Liste de produits"],

    "liste" => ["PHP/VUE/", "pagePrincipale2", "Liste de produits"],
    "ajouter2" => ["PHP/VUE/", "ajouter2", "Ajout de produit"],
    "detail2" => ["PHP/VUE/", "detail2", "Détail du produit"],
    "modifier2" => ["PHP/VUE/", "modifier2", "Modification de produit"],
    "ActionProduit" => ["PHP/VUE/", "ActionProduit", "Actions sur les produits"],
    "FormProduit" => ["PHP/VUE/", "FormProduit", "Formulaire sur la gestion des produits"]
    
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