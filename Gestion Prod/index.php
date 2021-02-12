<?php
function ChargerClasse($classe)
{
	if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
		require "PHP/controller/" . $classe . ".Class.php";
	}

	if (file_exists("PHP/model/" . $classe . ".Class.php")) {
		require "PHP/model/" . $classe . ".Class.php";
	}
}
require 'PHP/model/DbConnect.Class.php';

spl_autoload_register("ChargerClasse");
function afficherPage($chemin, $page, $titre)
{
	require  'PHP/view/head.php';
	require  'PHP/view/header.php';
	require($chemin . $page);
	require 'PHP/view/footer.php';
}

DbConnect::init();
session_start();
// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
if (isset($_GET['action'])) {
	// En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante

	switch ($_GET['action']) {

		case 'nouveauUser': {
				afficherPage('PHP/view/', 'FormEnregistrement.php', "Nouvel Utilisateur");
				break;
			}
		case 'connect': {
				afficherPage('PHP/view/', 'connexionForm.php', "Connection");
				break;
			}
		case 'deconnect': {
				afficherPage('PHP/view/', 'FormDeconnection.php', "Deconnection");
				break;
			}
		case "ClientAction":
			afficherPage('PHP/view/', "ClientAction.php", "");
			break;
		case "ClientForm":
			afficherPage('PHP/view/', "ClientForm.php", "Gestion des messages");
			break;
		case "ClientListe":
			afficherPage('PHP/view/', "ClientListe.php", "Liste des messages");
			break;
		case "productionForm":
			afficherPage('PHP/view/', "productionForm.php", "Nouvelle Production");
			break;
		case "nouvelleProd":
			afficherPage('PHP/view/', "productionAction.php", "Nouvelle Production");
			break;
		case "production":
			afficherPage('PHP/view/', "Production.php", "Nouvelle Production");
			break;
	}
} else { // Sinon, on affiche la page principale du site
	afficherPage('PHP/view/', 'connexionForm.php', "Connection");
}
