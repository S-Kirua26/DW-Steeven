<?php

function codeAvion()
{
    do
    // strtoupper permet de convertir les lettres minuscules en majuscules
    {
        $demande = strtoupper(readline("Entrez le code de l'avion: \n"));
        $test = $demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN";
            if ($test)
            {
                echo "Cet avion n'existe pas, veuillez recommencer \n";
            }
    } while ($test);
  return $demande;
}

function recommencer($phrase)
{
    do
    {
        $continuer = strtoupper(readline($phrase));
        $test = ($continuer != "O" && $continuer != "N");
            if ($test)
            {
                echo "saisie invalide, ";
            } 
    } while ($test);
  return $continuer;
}

$avion = ["BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$codeAvion = ["BO","AB","LJ","DC","CO","AN"];
$vitesseC = ["800","950","700","900","1400","560"];
$rayonA = ["10000","12000","4500","8000","16000","2500"];

do
{
    $demande = codeAvion();
    $resultatAvion = array_search($demande,$codeAvion);

    echo "Avion: ".$avion[$resultatAvion]. " Vitesse: ".$vitesseC[$resultatAvion]. " Rayon d'action: ".$rayonA[$resultatAvion]. "\n";


        $statistique = recommencer("Voulez-vous afficher les statistique? (O/N) \n");
        
        if ($statistique == "O")
        {
            $vitesse = array_search(max($vitesseC),$vitesseC);
            echo "L'avion qui vole le plus vite est le ".$avion[$vitesse]. " à ". $vitesseC[$vitesse]. " km\h \n";
            $moyenne = array_sum($rayonA) / count($rayonA);
            echo "La moyenne des rayons d'action est de: ".$moyenne. "\n";
        }
 
    $autreRecherche = recommencer("Voulez-vous faire une autre recherche? (O/N) \n");

} while ($autreRecherche == "O");

echo "Au revoir et à bientôt";


?>