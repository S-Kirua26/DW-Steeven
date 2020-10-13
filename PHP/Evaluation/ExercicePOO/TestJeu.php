<?php

require "ClassDe.php";
require "ClassMonstreFacile.php";
require "ClassMonstreDifficile.php";
require "ClassJoueur.php";

function lancerJeu($trace)
{ //methode qui lance le jeu
    $monHeros = new Joueur(["pV" => 50, "nom" => "monHeros"]);
    while ($monHeros->estVivant()) // Tant que le héros est vivant, il combat des monstres
    {
        $monstre = FabriqueDeMonstre();
        while ($monstre->getEstVivant() && $monHeros->estVivant()) // Attaque succéssive jusqu'à ce que l'un des 2 soit tués
        {
            $monHeros->attaque($monstre,$trace);
            if ($monstre->getEstVivant()) {
                $monstre->attaque($monHeros,$trace);
            }
        }

        if ($trace and $monHeros->estVivant()) {
            echo "************************************  Monstre Suivant"."\n";
        }

    }
	echo "Dommage, vous êtes mort...\n";
	echo "Cela dit, vous avez tué " . MonstreFacile::getNbMonstreFacile() . " monstres faciles et " . MonstreDifficile::getNbMonstreDifficile() . " monstres difficiles. \n";
	echo "Vous avez ".(MonstreFacile::getNbMonstreFacile() + MonstreDifficile::getNbMonstreDifficile() * 2)." points."."\n";
}

function FabriqueDeMonstre()
{ //Méthode qui fabrique (instancie des Monstres faciles ou difficiles)
    //Renvoi une instance de Monstre (Comme MonstreDifficile herite de MonstreFacile, les 2 sont permis)
    if (rand(1, 2) == 1) {
        return new MonstreFacile();
    } else {
        return new MonstreDifficile();
    }

}

//on determine si on affiche les traces
do {
    $reponse = strtoupper(readline("Jouer en mode Trace ? (O/N) "));
} while ($reponse != "O" and $reponse != "N");

if ($reponse == "O") {
    $trace = true;
} else {
    $trace = false;
}

lancerJeu($trace);


?>