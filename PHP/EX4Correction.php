<?php

function codeAvion()
{
    do
    // strtoupper permet de convertir les lettres minuscules en majuscules
    {
        $demande = strtoupper(readline("Entrez le code de l'avion: \n")); // on demande le code de l'avion à l'utilisateur
        $test = $demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN"; // on vérifie la demande avec les codes d'avions voulues
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
        $continuer = strtoupper(readline($phrase)); // on demande à l'utilisateur si il veut continuer
        $test = ($continuer != "O" && $continuer != "N"); // tant que la réponse est différent de "O" ou bien "N", on boucle
            if ($test)
            {
                echo "saisie invalide, ";
            } 
    } while ($test);
  return $continuer;
}

// on initialise quatre tableaux avec différents paramètres

$avion = ["BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$codeAvion = ["BO","AB","LJ","DC","CO","AN"];
$vitesseC = ["800","950","700","900","1400","560"];
$rayonA = ["10000","12000","4500","8000","16000","2500"];

do
{
    $demande = codeAvion(); // on demande à l'utilisateur le code de l'avion (avec la fonction)
    $resultatAvion = array_search($demande,$codeAvion); // on recherche si le code saisie par l'utilisateur est valide

    echo "Avion: ".$avion[$resultatAvion]. " Vitesse: ".$vitesseC[$resultatAvion]. " Rayon d'action: ".$rayonA[$resultatAvion]. "\n"; // si oui, on affiche les données


        $statistique = recommencer("Voulez-vous afficher les statistique? (O/N) \n"); // on demande à l'utilisateur si il veur affichez les statistiques
        
        if ($statistique == "O") // si oui, on affiche les résultats
        {
            $vitesse = array_search(max($vitesseC),$vitesseC); // on vérifie la données la plus grande dans le tableau des vitesse
            echo "L'avion qui vole le plus vite est le ".$avion[$vitesse]. " à ". $vitesseC[$vitesse]. " km\h \n"; // puis on l'affiche
            $moyenne = array_sum($rayonA) / count($rayonA); // on calcul la moyenne des vitesses des avions
            echo "La moyenne des rayons d'action est de: ".$moyenne. "\n"; // puis on l'affiche
        }
 
    $autreRecherche = recommencer("Voulez-vous faire une autre recherche? (O/N) \n"); // on demande à l'utilisateur si il veut continuer

} while ($autreRecherche == "O");

echo "Au revoir et à bientôt";


?>