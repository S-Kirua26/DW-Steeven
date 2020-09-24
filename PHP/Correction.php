<?php

// function codeAvion($phrase)
// {
//     do
//     // strtoupper permet de convertir les lettres minuscules en majuscules
//     {
//         $demande = strtoupper(readline($phrase));
//             if ($demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN")
//             {
//                 echo "Saisie incorrect, veuillez recommencer\n";
//             }
//     } while ($demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN");
// }

// $test = ($demande != "BO" && $demande != "AB" && $demande != "LJ" && $demande != "DC" && $demande != "CO" && $demande != "AN");

//     do
//     // strtoupper permet de convertir les lettres minuscules en majuscules
//     {
//         $demande = strtoupper(readline($phrase));
//             if ($test)
//             {
//                 echo "Saisie incorrect, veuillez recommencer\n";
//             }
//     } while ($test);

$Avion = ["BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32"];
$CodeAvion = ["BO","AB","LJ","DC","CO","AN"];
$VitCro = ["800","950","700","900","1400","560"];
$RayAct = ["10000","12000","4500","8000","16000","2500"];

$resultat = array_sum($RayAct) / count($RayAct);
echo $resultat;
?>