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

Parametre::init();
DbConnect::init();
session_start();  // initialise la variable de Session


function afficherPage($page)
{
    $chemin=$page[0];
    $nom=$page[1];
    $titre=$page[2];

    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    include 'PHP/VIEW/nav.php';
    include $chemin.$nom.'.php';
    include 'PHP/VIEW/footer.php';
}

function crypte($mot) //fonction qui crypte le mot de passe
{
    return md5(md5($mot) . strlen($mot)*pow(pi(),strlen($mot)));
}

if (isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';


function texte($codetexte)
{
    global $lang;
    return TexteManager::findByCodes($lang, $codetexte);
}

$routes=[
    "default"=>["PHP/VIEW/","listeConventions","Liste des conventions"],
    "listeAnimateurs"=>["PHP/VIEW/","listeAnimateurs","Liste des animateurs"],
    "listeConventions"=>["PHP/VIEW/","listeConventions","Liste des conventions"],
    "listeEmplacements"=>["PHP/VIEW/","listeEmplacements","Liste des emplacements"],
    "listeSalles"=>["PHP/VIEW/","listeSalles","Liste des salles"],
    "listeVisite"=>["PHP/VIEW/","listeVisite","Liste des visites"],
    "listeVisiteurs"=>["PHP/VIEW/","listeVisiteurs","Liste des visiteurs"],
    "formulaireAnimateurs"=>["PHP/VIEW/","formulaireAnimateurs","Formulaire des Animateurs"],
    "formulaireConventions"=>["PHP/VIEW/","formulaireConventions","Formulaire des Conventions"],
    "formulaireEmplacements"=>["PHP/VIEW/","formulaireEmplacements","Formulaire des Emplacements"],
    "formulaireSalles"=>["PHP/VIEW/","formulaireSalles","Formulaire des Salles"],
    "formulaireVisite"=>["PHP/VIEW/","formulaireVisite","Formulaire des Visites"],
    "formulaireVisiteurs"=>["PHP/VIEW/","formulaireVisiteurs","Formulaire des Visiteurs"],
    "traitementAnimateurs"=>["PHP/VIEW/","traitementAnimateurs","Traitement des Animateurs"],
    "traitementConventions"=>["PHP/VIEW/","traitementConventions","Traitement des Conventions"],
    "traitementEmplacements"=>["PHP/VIEW/","traitementEmplacements","Traitement des Emplacements"],
    "traitementSalles"=>["PHP/VIEW/","traitementSalles","Traitement des Salles"],
    "traitementVisite"=>["PHP/VIEW/","traitementVisite","Traitement des Visites"],
    "traitementVisiteurs"=>["PHP/VIEW/","traitementVisiteurs","Traitement des Visiteurs"],
    "formulaireUtilisateurs"=>["PHP/VIEW/","formulaireUtilisateurs","Formulaire des Utilisateurs"],
    "traitementUtilisateurs"=>["PHP/VIEW/", "traitementUtilisateurs","Traitement des utilisateurs"],
    "traitementConnexion"=>["PHP/VIEW/", "traitementConnexion","Traitement des connexions"],
    "formulaireConnexions"=>["PHP/VIEW/","formulaireConnexions","Formulaire des connexions"],
    "traitementDeconnection"=>["PHP/VIEW/", "traitementDeconnection","Traitement de la deconnection"],
    "Admin"=>["PHP/VIEW/","Admin","Page pour les admins"],
    "Utilisateurs"=>["PHP/VIEW/","Utilisateurs","Page pour les utilisateurs"]
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
