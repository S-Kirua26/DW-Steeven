<?php
function demandeEntier($invite) // Demande un entier à l'utilisateur

{
    do
    {
        do
        {
            $nombre = readline($invite);
        } while (!is_numeric($nombre) || !$nombre > 0); // on verifie que la chaine de caractere ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}


/**
 * méthode qui crée un tableau de $lig lignes et $col colonnes et le rempli de "."
 *
 * @param int $lig  nombre de ligne
 * @param int $col  nombre de colonne
 * @return array
 */
function creationTableau($lig, $col)
{
    for ($i = 0; $i < $lig; $i++)
    {
        for ($j = 0; $j < $col; $j++)
        {
            $t[$i][$j] = ".";
        }
    }
    return $t;
}
/**
 * affiche le plateau de jeu
 *
 * @param array $plateau
 * @return void
 */
function afficheTableau($plateau)
{
    echo "\n";
    $nbCol = count($plateau[0]);
    // on prepare les séparateurs et le titre
    $ligneSuperieure = "";
    $ligneIntermediaire = "";
    $titre = "";

    for ($k = 1; $k <= $nbCol; $k++)
    {
        //on commence à 1 pour afficher les numeros des colonnes
        $titre .= "\t    " . chr($k + ord('A') - 1);
        if ($k == $nbCol)
        {
            $ligneSuperieure .= "_______";
        }
        else
        {
            $ligneSuperieure .= "________";
        }
        $ligneIntermediaire .= "_______|";
    }

    //Affiche ligne par ligne
    for ($i = 0; $i < count($plateau); $i++)
    {
        if ($i == 0) //haut du tableau
        {
            echo $titre . "\n\t ";
            //ligne supérieur du tableau
            echo $ligneSuperieure . "\n";
        }
        else //Centre du tableau
        {
            //ligne intermédiaire

            echo $ligneIntermediaire . "\n";
        }
        //affichage des élément du tableau
        for ($j = 0; $j < $nbCol; $j++)
        {
            echo "\t|   " . $plateau[$i][$j];
        }
        echo "\t|\n\t|";
    }
    //bas du tableau
    echo $ligneIntermediaire . "\n";

}
/**
 * methode qui demande à l'utilisateur le symbole associé à chaque joueur. La méthode renvoi un tableau de symboles, le 1er joueur correspond à la case 0 et ainsi de suite
 * Les symboles sont alphanumériques, il ne peut pas y avoir 2 fois le même symbole.
 *
 * @param int $nbJoueur
 * @return array
 */
function choixSymbole($nbJoueur)
{
    /*On déclare le tableau des symboles, vide*/
    $symboles = [];

    /*On fait une boucle pour remplir le tableau $symboles par le choix des joueurs*/
    for ($i = 0; $i < $nbJoueur; $i++)
    {

        /*On vérifie l'entrée du joueur et s'il n'y a pas deux choix identiques*/
        do
        {
            $symbole = readline("Entrer le symbole du joueur numéro " . ($i + 1) . " : " . "\n");
        } while (!ctype_alnum($symbole) or in_array($symbole, $symboles) === true or strlen($symbole)!=1);

        $symboles[] = $symbole;

        echo "\nLe joueur numéro " . ($i + 1) . " a choisi le symbole " . $symboles[$i] . "\n\n";

    }
    return $symboles;
}
/**
 * détermine le numéro du joueur suivant
 * si joueurEnCours est null, il choisit un numéro au hasard, sinon il renvoi le joueur suivant.
 * Si on est à la fin de la boucle, il revient au premier
 *
 * @param int $nbJoueur
 * @param int $joueurEnCours
 * @return int
 */
function joueurSuivant($nbJoueur, $joueurEnCours)
{
    if ($joueurEnCours === null)
    { // Si le premier joueur n'est pas encore défini, alors un random choisira le premier joueur
        $joueurSuivant = rand(0, $nbJoueur - 1);
    }
    else
    {
        $joueurSuivant = ($joueurEnCours + 1) % $nbJoueur; // Modulo permettant de faire une boucle choisissant le prochain joueur selon le numéro du joueur actuel

    }
    return $joueurSuivant; // Joueur suivant
}

/**
 * converti les coordonnées A3 en [3,0].
 * Les lettres représentent les colonnes. L'utilisateur peut saisir 4B pour [4,1]
 * Le tableau renvoyé contient le n° de ligne dans la case 0 et le n° de colonne dans la case 1
 *
 * @param string $coordonnee
 * @return void
 */
function conversionPosition($coordonnee)
{
    $coordonnee = strtoupper($coordonnee);
    if (ctype_alnum($coordonnee[0])) //si c'est une lettre
    {
        $alpha = $coordonnee[0];
        $numCol = ord($alpha) - ord("A");
    }
    $tabCord[1] = $numCol;
    return $tabCord;
}
/**
 * demande à l'utilisateur la case dans laquelle il veut jouer, vérifie que cette case appartient bien au tableau, vérifie que la case du plateau est vide pour cette position
 *
 * @param array $plateau
 * @return array
 */
function selectionPosition($plateau, $symbole)
{
    do
    {
        do//boucle pour verifier si les position existe dans le plateau
        {

            do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
            {

                 $chaine = readline("$symbole veuillez saisir la colonne ou positionner votre pion: ");

            } while (strlen($chaine) > 1 || !ctype_alnum($chaine));
 
            $numCol = conversionPosition($chaine);

        } while ($numCol >= count($plateau[0]));
    } while ($plateau[$numCol] != '.');
    return $numCol;
}

/**
 * renvoi le tableau mis à jour avec le symbole dans la case précisée par les positions
 *
 * @param array $plateau
 * @param char $symbole
 * @param array $positions
 * @return array
 */
function remplirTableau($plateau, $symbole, $positions)
{
    $plateau[$positions[0]][$positions[1]] = $symbole;
    return $plateau;
}


/**
 * compte le nombre de symboles alignés successifs dans une direction à partir d'une position (cette position n'est pas comptée)
 *
 * @param array $plateau
 * @param array $positions
 * @param int $directionX
 * @param int $directionY
 * @param char $symbole
 * @return void
 */
function compteAlignes($plateau, $positions, $directionX, $directionY, $symbole)
{
    //on determine les nouvelles coordonnées
    $positionSuivanteX = $positions[0] + $directionX;
    $positionSuivanteY = $positions[1] + $directionY;
    // on déplace la position actuelle
    $positions[0] = $positionSuivanteX;
    $positions[1] = $positionSuivanteY;

    if ($positions[0] >= count($plateau) || $positions[1] >= count($plateau[0]) || $positions[0] < 0 || $positions[1] < 0)
    { //vérification si on se trouve toujours dans le tableau, si non on arrête
        return 0;
    }
    $symboleSuivant = $plateau[$positionSuivanteX][$positionSuivanteY];
    if ($symboleSuivant != $symbole)
    { //on s'arrête quand le symbole suivant est différent
        return 0;
    }
    else
    {
        return 1 + compteAlignes($plateau, $positions, $directionX, $directionY, $symbole);
    }
}

/**
 * vérifie si le joueur qui vient de jouer à gagner.
 * Renvoi 1 si la partie est gagnée, -1 si le tableau est plein, 0 si la partie est toujours en cours
 *
 * @param array $plateau
 * @param int $alignementPourGagner
 * @param array $positions
 * @param char $symbole
 * @return void
 */
function testerGagne($plateau, $alignementPourGagner, $positions, $symbole)
{
    //X = Lignes Y = Colonnes
    $sommeLigne = compteAlignes($plateau, $positions, 1, 0, $symbole) + compteAlignes($plateau, $positions, -1, 0, $symbole) + 1; //Demande à compteAlignes de compter l'alignement sur la ligne, j'ajoute +1 puisqu'il ne compte pas le dernier symbole ajouté
    $sommeColonne = compteAlignes($plateau, $positions, 0, 1, $symbole) + compteAlignes($plateau, $positions, 0, -1, $symbole) + 1; //Demande à compteAlignes de compter l'alignement sur la colonne, j'ajoute +1 puisqu'il ne compte pas le dernier symbole ajouté
    $sommeDiagonaleMontante = compteAlignes($plateau, $positions, -1, 1, $symbole) + compteAlignes($plateau, $positions, 1, -1, $symbole) + 1; //Demande à compteAlignes de compter l'alignement sur la diagonale montante, j'ajoute +1 puisqu'il ne compte pas le dernier symbole ajouté
    $sommeDiagonaleDescendante = compteAlignes($plateau, $positions, -1, -1, $symbole) + compteAlignes($plateau, $positions, 1, 1, $symbole) + 1; //Demande à compteAlignes de compter l'alignement sur la diagonale descendante, j'ajoute +1 puisqu'il ne compte pas le dernier symbole ajouté
    if (($sommeLigne >= $alignementPourGagner) || ($sommeColonne >= $alignementPourGagner) || ($sommeDiagonaleMontante >= $alignementPourGagner) || ($sommeDiagonaleDescendante >= $alignementPourGagner))
    {
        return 1; //Si l'une des variables est égale ou supérieure au nombre de symbole qu'il faut pour gagner, la partie s'arrête, et le joueur gagne
    }
    else if (plateauPlein($plateau))
    {
        return -1; //Sinon si le plateau est plein, la partie s'arrête, il n'y a aucun vainqueur
    }
    else
    {
        return 0; //Sinon, la partie continue
    }
}

function trouverCase($plateau,$numCol)
{
    for($i = 0; $i < $numCol; $i++)
    {
        if($numCol[$i] != ".")
        {
            return -1;
        }
        else{
            $position[0] = $i;
            $position[1] = $numCol;
            return $position;
        }
    }
}

/**
 * gère la partie avec les autres fonctions
 *
 * @return void
 */
function lancerPartie()
{
    //msg de bienvenue
    $jeu= readline("Voulez-vous jouer au morpion ou au puissance 4? \n");

    do
    {
        $continuer = strtoupper(readline($jeu)); // on demande à l'utilisateur si il veut continuer
        $test = ($continuer != "M" && $continuer != "P"); // tant que la réponse est différent de "M" ou bien "P", on boucle
            if ($test)
            {
                echo "saisie invalide, ";
            } 
    } while ($test);

    //initialisation
    do
    {

        do
        {
            $nbUser = demandeEntier("Entrer le nombre de joueurs : \n");
        } while ($nbUser < 2 || $nbUser > 10);
        do
        {
            $nbCol = demandeEntier("Entrer le nombre de colonnes : \n");
        } while ($nbCol < 3 || $nbCol > 25);
        do
        {
            $nbLig = demandeEntier("Entrer le nombre de lignes  : \n");
        } while ($nbLig < 3 || $nbLig > 25);
        $max = $nbCol > $nbLig ? $nbCol : $nbLig;

        do
        {
            $alignementPourGagner = demandeEntier("Entrer le nombre d'alignement Pour Gagner : \n");
        } while ($alignementPourGagner != 4);

        $nbcases = $nbCol * $nbLig;
    } while ($nbcases < $nbUser * $alignementPourGagner + 1);

    //demarrage du jeu
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran
    $plateau = creationTableau($nbLig, $nbCol);
    $symboles = choixSymbole($nbUser);
    $joueurEnCours = joueurSuivant($nbUser, null);
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran
    do
    {
        $joueurEnCours = joueurSuivant($nbUser, $joueurEnCours);
        echo "C'est au joueur " . $symboles[$joueurEnCours] . " de jouer \n";
        afficheTableau($plateau);
        $positions = selectionPosition($plateau, $symboles[$joueurEnCours]);
        $plateau = remplirTableau($plateau, $symboles[$joueurEnCours], $positions);
        $testGagner = testerGagne($plateau, $alignementPourGagner, $positions, $symboles[$joueurEnCours]);
        echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J'; //permet de vider l'écran
    } while ($testGagner == 0);
    if ($testGagner == 1)
    {
        echo "\n\n\n ***********   Le joueur $symboles[$joueurEnCours] a gagné  **********";
    }
    else
    {
        echo "Personne ne gagne";
    }
    afficheTableau($plateau);
}


/**
 * détermine si le plateau est plein (aucune place disponible). Renvoi vrai si le plateau est plein, faux sinon
 *
 * @param array $plateau
 * @return bool
 */
function plateauPlein($plateau)
{
    for ($i = 0; $i < count($plateau[0]); $i++)
    {
        if (in_array(".", $plateau[0]))
        {
            return false;
        }
    }
    return true;
}

lancerPartie();
?>