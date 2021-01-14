<?php

require("./Outils.php");

$parametres = Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	"default"=>["PHP/VIEW/","MenuProviseur","formulaire des Connexions"],
	// "TestElevesManager"=>["PHP/MODEL/TESTMANAGER/","TestElevesManager","test eleves"],
	// "TestEnseignantsManager"=>["PHP/MODEL/TESTMANAGER/","TestEnseignantsManager","test enseignant"],
	// "TestNotesManager"=>["PHP/MODEL/TESTMANAGER/","TestNotesManager","test notes"],
	"ElevesManager"=>["PHP/MODEL/","ElevesManager","manager eleves"],
	"ListeEleves"=>["PHP/VIEW/","ListeEleves","liste des eleves"],
	"ListeEnseignants"=>["PHP/VIEW/","ListeEnseignants","liste des enseignants"],
	"ListeMatieres"=>["PHP/VIEW/","ListeMatieres","liste des matieres"],
	"ListeNotes"=>["PHP/VIEW/","ListeNotes","liste des notes"],
	"ListeSuivis"=>["PHP/VIEW/","ListeSuivis","liste des suivis"],
	"ListeRoles"=>["PHP/VIEW/","ListeRoles","liste des roles"],
	"ListeUtilisateurs"=>["PHP/VIEW/","ListeUtilisateurs","liste des utilisateurs"],

	"FormulaireEleves"=>["PHP/VIEW/","FormulaireEleves","formulaire des eleves"],
	"FormulaireEnseignants"=>["PHP/VIEW/","FormulaireEnseignants","formulaire des enseignants"],
	"FormulaireMatieres"=>["PHP/VIEW/","FormulaireMatieres","formulaire des matieres"],
	"FormulaireNotes"=>["PHP/VIEW/","FormulaireNotes","formulaire des notes"],
	"FormulaireSuivis"=>["PHP/VIEW/","FormulaireSuivis","formulaire des suivis"],
	"FormulaireRoles"=>["PHP/VIEW/","FormulaireRoles","formulaire des roles"],
	"FormulaireUtilisateurs"=>["PHP/VIEW/","FormulaireUtilisateurs","formulaire des utilisateurs"],
	"FormulaireConnexions"=>["PHP/VIEW/","FormulaireConnexions","formulaire des connexions"],
	"MenuProviseur"=>["PHP/VIEW/","MenuProviseur","menu du proviseur "],

	"ActionEleves"=>["PHP/VIEW/","ActionEleves","Action des eleves"],
	"ActionEnseignants"=>["PHP/VIEW/","ActionEnseignants","Action des enseignants"],
	"ActionMatieres"=>["PHP/VIEW/","ActionMatieres","Action des matieres"],
	"ActionNotes"=>["PHP/VIEW/","ActionNotes","Action des notes"],
	"ActionSuivis"=>["PHP/VIEW/","ActionSuivis","Action des suivis"],
	"ActionRoles"=>["PHP/VIEW/","ActionRoles","Action des roles"],
	"ActionUtilisateur"=>["PHP/VIEW/","ActionUtilisateur","Action des utilisateurs"],
	"ActionConnexions"=>["PHP/VIEW/","ActionConnexions","Action des connexions"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}