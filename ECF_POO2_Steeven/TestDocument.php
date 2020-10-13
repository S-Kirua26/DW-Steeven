<?php

// require "ClassDocument.php";
require "ClassDocument2.php";
require "ClassAuteur.php";
require "ClassLivre.php";
require "ClassVideo.php";
require "ClassEnregistrementAudio.php";

// ******************************* On créé les documents avec le nom des auteurs, les titres et si le livre est emprunté ****************************************************

// $document[0] = new Document(["auteur" => "Michel", "titre" => "La Rose Bleue", "emprunt" => "non"]);
// echo $document[0]->toString();
// $document[1] = new Document(["auteur" => "Frederic", "titre" => "La Mort Pourpre", "emprunt" => "non"]);
// echo $document[1]->toString();
// $document[2] = new Document(["auteur" => "Michel", "titre" => "La Rose Bleue", "emprunt" => "oui"]);
// echo $document[2]->toString();

// ******************************* On créé les différents auteurs avec nom, prénom, date de naissance et\ou date de décès ***************************************************

$auteur[0] = new Auteur(["nom" => "Michel", "prenom" => "Patrice", "dateDeNaissance" => New DateTime('1974-05-02'), "dateDeDécès" => new DateTime('2014-06-14')]);
$auteur[1] = new Auteur(["nom" => "Ruileni", "prenom" => "Pompini", "dateDeNaissance" => New DateTime('1963-11-17'), "dateDeDécès" => new DateTime('0000-00-00')]);
$auteur[2] = new Auteur(["nom" => "Michel", "prenom" => "Patrice", "dateDeNaissance" => New DateTime('1974-05-02'), "dateDeDécès" => new DateTime('2014-06-14')]);
$auteur[3] = new Auteur(["nom" => "Flaubert", "prenom" => "Gustave", "dateDeNaissance" => New DateTime('1834-05-07'), "dateDeDécès" => new DateTime('1874-02-23')]);
$auteur[4] = new Auteur(["nom" => "Momorensi", "prenom" => "Roqcki", "dateDeNaissance" => New DateTime('1952-07-04'), "dateDeDécès" => new DateTime('2001-02-03')]);
$auteur[5] = new Auteur(["nom" => "Flaubert", "prenom" => "Gustave", "dateDeNaissance" => New DateTime('1834-05-07'), "dateDeDécès" => new DateTime('1874-02-23')]);
$auteur[6] = new Auteur(["nom" => "Pompri", "prenom" => "Leonard", "dateDeNaissance" => New DateTime('1997-11-17'), "dateDeDécès" => new DateTime('0000-00-00')]);

// ******************************* On créé les documents avec nom, titre et si le livre est emprunté mais on affiche les détails des auteurs ********************************

$document[0] = new Document2(["auteur" => $auteur[0], "titre" => "La Rose Bleue", "emprunt" => "non"]);
// echo $document[0]->toString();
$document[1] = new Document2(["auteur" => $auteur[1], "titre" => "La Mort Pourpre", "emprunt" => "non"]);
// echo $document[1]->toString();
$document[2] = new Document2(["auteur" => $auteur[2], "titre" => "La Rose Bleue", "emprunt" => "oui"]);
// echo $document[2]->toString();

// ******************************* On créé un livre avec les informations de l'auteur, le titre et le nombres de pages ******************************************************

$livre[0] = new Livre(["auteur" => $auteur[4], "titre" => "La Mort Ecarlate", "nombreDePages" => 236]);
// echo $livre[0]->toString();

// ******************************* On créé des vidéos avec les informations de l'auteur, le titre et si il y a ou non des sous-titres ***************************************

$video[0] = new Video(["auteur" => $auteur[5], "titre" => "Le Visage Eclatant", "avecSousTitre" => "non", "sansSousTitre" => "oui"]);
// echo $video[0]->toString();
$video[0] = new Video(["auteur" => $auteur[6], "titre" => "L'ombre Malveillante", "avecSousTitre" => "oui", "sansSousTitre" => "non"]);
// echo $video[0]->toString();

// ******************************* On créé des enregistrements Audios avec les informations de l'auteur, le titre et la durée de l'enregistrement ***************************

$enregistrement = new EnregistrementAudio(["auteur" => $auteur[6], "titre" => "L'ombre Malveillante", "duree" => "2 heures et 56 minutes"]);
// echo $enregistrement->toString();
$enregistrement = new EnregistrementAudio(["auteur" => $auteur[3], "titre" => "L'erreur Caché", "duree" => "6 heures et 25 minutes"]);
// echo $enregistrement->toString();

?>