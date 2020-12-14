
function afficherTableau(tableau)
{
    for(var propriete in tableau)
    {
        console.log(propriete + " ");
    }
}

function coderMot(mot, niveau)
{
    var tableau = string_split(mot);
    if(niveau == 1)
    {
        for(i=1;i<tableau.length - 1;i++)
        {
            tableau[i] = "_";
        }
    }
    else
    {
        for(i=0;i<tableau.length;i++)
        {
            tableau[i] = "_";
        }
    }
    return tableau;
}

function creer_dico()
{
    var tableauMots =
    ["AEROPORT",
    "AFFAIRE",
    "ALBUM",
    "ALPHABET",
    "AMENER",
    "AMPOULE",
    "ANCIEN",
    "ANORAK",
    "ANTENNE",
    "APPAREIL",
    "APPORTER",
    "APPUYER",
    "APRES",
    "ARC",
    "ARMOIRE",
    "ARRET",
    "ARRIERE",
    "ARRIVER",
    "ARROSER",
    "ASSIETTE",
    "ASSIS",
    "ATTACHER",
    "ATTENDRE",
    "ATTENTION",
    "ATTERRIR",
    "ATTRAPER",
    "AU",
    "AUTANT",
    "AUTO",
    "AUTOMOBILISTE",
    "AUTORADIO",
    "AUTOUR",
    "AVANCER",
    "AVANT",
    "AVEC",
    "AVION",
    "BAGAGE",
    "BAGUETTE",
    "BAIGNER",
    "BÂILLER",
    "BALLE",
    "BANC",
    "BARBE",
    "BARBOTER",
    "BARQUE",
    "BARRE",
    "BARREAU",
    "BAS",
    "BATEAU",
    "BEAUCOUP",
    "BIBLIOTHEQUE",
    "BLANC",
    "BLEU",
    "BOIS",
    "BOITE",
    "BONDIR",
    "BONNET",
    "BORD",
    "BOSSER",
    "BOTTE",
    "BOUCHER",
    "BOUCHON",
    "BOUDER",
    "BOUGER",
    "BOUSCULER",
    "BOUT",
    "BOUTEILLE",
    "BOUTON",
    "BRAS",
    "BRETELLE",
    "BRICOLAGE",
    "BRUIT",
    "BRUN",
    "BULLES",
    "BUREAU",
    "CABANE",
    "CABINET",
    "CAGOULE",
    "CAHIER",
    "CAISSE",
    "CALME",
    "CAMARADE",
    "CAMESCOPE",
    "CAMION",
    "CANARD",
    "CARNET",
    "CARREAU",
    "CARTABLE",
    "CARTON",
    "CASIER",
    "CASQUE",
    "CASQUETTE",
    "CASSE",
    "CASSER",
    "CASSEROLE",
    "CASSETTE",
    "CATALOGUE",
    "CEDE",
    "CEDEROM",
    "CEINTURE",
    "CERCEAU",
    "CHAINE",
    "CHAISE",
    "CHAISES",
    "CHANSON",
    "CHAPEAU",
    "CHARGER",
    "CHAT",
    "CHAUD",
    "CHAUSSETTE",
    "CHAUSSON",
    "CHAUSSURE",
    "CHEMISE",
    "CHERCHER",
    "CHEVILLE",
    "CHIFFRE",
    "CHOISIR",
    "CHOSE",
    "CHUCHOTER",
    "CHUTE",
    "CIGARETTE",
    "CINQ",
    "CISEAUX",
    "CLASSE",
    "CLAVIER",
    "CLE",
    "CLOU",
    "COIN",
    "COL",
    "COLERE",
    "COLLANT",
    "COLLE",
    "COLLER",
    "COLORIAGE",
    "COLORIER",
    "COMMENCER",
    "COMPARER",
    "COMPTER",
    "CONDUIRE",
    "CONSTRUIRE",
    "CONTE",
    "CONTINUER",
    "CONTRAIRE",
    "CONTRE",
    "COPAIN",
    "COPIER",
    "COQUILLAGE",
    "COQUILLETTE",
    "COQUIN",
    "CORDE",
    "CORPS",
    "COTE",
    "COU",
    "COUCHE",
    "COUDE",
    "COUDRE",
    "COULEUR",
    "COULOIR",
    "COUPER",
    "COURIR",
    "COURONNE",
    "COURT",
    "CRAIE",
    "CRAVATE",
    "CROCHET",
    "CROISSANT",
    "CUBE",
    "CUILLERE",
    "CUISSE",
    "CULOTTE",
    "CURIEUX",
    "CUVETTE",
    "DAME",
    "DANGER",
    "DANS",
    "DANSER",
    "DE",
    "DEBORDER",
    "DEBOUT",
    "DECHIRER",
    "DECOLLER",
    "DECORER",
    "DECOUPAGE",
    "DECOUPER",
    "DEDANS",
    "DEFENDRE",
    "DEHORS",
    "DELTAPLANE",
    "DEMANDER",
    "DEMARRER",
    "DEMOLIR",
    "DEPASSER",
    "DERNIER",
    "DERRIERE",
    "DESCENDRE",
    "DESOBEIR",
    "DESSIN",
    "DESSINER",
    "DETRUIRE",
    "DEUX",
    "DEUXIEME",
    "DEVANT",
    "DICTIONNAIRE",
    "DIFFERENCE",
    "DIFFERENT",
    "DIFFICILE",
    "DIRE",
    "DIRECTEUR",
    "DIRECTRICE",
    "DISCUTER",
    "DISPARAITRE",
    "DISTRIBUER",
    "DIX",
    "DOIGT",
    "DOIGTS",
    "DOMINO",
    "DONNER",
    "DORMIR",
    "DOS",
    "DOSSIER",
    "DOUCHE",
    "DOUCHER",
    "DOUX",
    "DROIT",
    "DU",
    "DUR",
    "EAU",
    "ECARTER",
    "ECHANGER",
    "ECHARPE",
    "ECHASSES",
    "ECHELLE",
    "ECLABOUSSER",
    "ECLAIRER",
    "ECOLE",
    "ECOUTER",
    "ECRAN",
    "ECRASER",
    "ECRIRE",
    "ECRITURE",
    "EFFACER",
    "EFFORT",
    "ELASTIQUE",
    "ELECTRICITE",
    "ELEVE",
    "EMMENER",
    "EMPORTER",
    "ENCORE",
    "ENERVE",
    "ENFANT",
    "ENFILER",
    "ENFONCER",
    "ENGIN",
    "ENLEVER",
    "ENTENDRE",
    "ENTONNOIR",
    "ENTOURER",
    "ENTREE",
    "ENTRER",
    "ENVELOPPE",
    "ENVOYER",
    "EPAIS",
    "EPAULE",
    "EPEE",
    "EQUIPE",
    "ESCABEAU",
    "ESCALADER",
    "ESCALIER",
    "ESCARGOT",
    "ESCARPIN",
    "ESSUYER",
    "ETAGERE",
    "ETANG",
    "ETIQUETTE",
    "ETROIT",
    "ETUDE",
    "ETUDIER",
    "EXPLIQUER",
    "EXTERIEUR",
    "FABRIQUER",
    "FACILE",
    "FAIRE",
    "FATIGUE",
    "FAUTE",
    "FAUTEUIL",
    "FEE",
    "FENETRE",
    "FERMER",
    "FESSE",
    "FEU",
    "FEUILLE",
    "FEUTRE",
    "FICELLE",
    "FIL",
    "FILET",
    "FILLE",
    "FILM",
    "FINIR",
    "FLECHE",
    "FLEUR",
    "FLOTTER",
    "FOIS",
    "FONCE",
    "FOND",
    "FOOTBALL",
    "FORT",
    "FOUILLER",
    "FRAPPER",
    "FREIN",
    "FROID",
    "FUSEE",
    "FUSIL",
    "GAGNER",
    "GANT",
    "GARAGE",
    "GARÇON",
    "GARDER",
    "GARDIEN",
    "GARE",
    "GAUCHE",
    "GENER",
    "GENOU",
    "GENTIL",
    "GLISSER",
    "GOLF",
    "GOMME",
    "GONFLER",
    "GOUTER",
    "GOUTTES",
    "GRAND",
    "GRIMPER",
    "GRIS",
    "GRONDER",
    "GROS",
    "GROUPE",
    "GRUE",
    "GYMNASTIQUE",
    "HABIT",
    "HANCHE",
    "HANDICAPE",
    "HAUT",
    "HELICOPTERE",
    "HEXAGONE",
    "HISTOIRE",
    "HORLOGE",
    "HUIT",
    "HUMIDE",
    "IDEE",
    "ILE",
    "IMAGE",
    "IMITER",
    "IMMEUBLE",
    "IMMOBILE",
    "INONDER",
    "INSEPARABLE",
    "INSTRUMENT",
    "INTERESSANT",
    "INTERIEUR",
    "INTRUS",
    "JALOUX",
    "JAMBES",
    "JAUNE",
    "JEAN",
    "JEU",
    "JOLI",
    "JOUER",
    "JOUET",
    "JUPE",
    "LAC",
    "LACER",
    "LACET",
    "LAINE",
    "LAISSER",
    "LARGE",
    "LAVABO",
    "LAVER",
    "LECTURE",
    "LETTRE",
    "LIERRE",
    "LIGNE",
    "LINGE",
    "LIRE",
    "LISSE",
    "LISTE",
    "LIT",
    "LITRE",
    "LIVRE",
    "LOIN",
    "LONG",
    "LUMIERE",
    "LUNETTES",
    "MADAME",
    "MAGAZINE",
    "MAGICIEN",
    "MAGIE",
    "MAGNETOSCOPE",
    "MAILLOT",
    "MAIN",
    "MAINS",
    "MAISON",
    "MAITRE",
    "MAITRESSE",
    "MAL",
    "MALADROIT",
    "MANCHE",
    "MANQUER",
    "MANTEAU",
    "MARCHE",
    "MARIONNETTE",
    "MARTEAU",
    "MATELAS",
    "MATERNELLE",
    "MELANGER",
    "MEME",
    "MENSONGE",
    "MESURER",
    "METAL",
    "METRE",
    "METTRE",
    "MEUBLE",
    "MICRO",
    "MIEUX",
    "MILIEU",
    "MINE",
    "MODELE",
    "MOINS",
    "MONTAGNE",
    "MONTER",
    "MONTRER",
    "MORCEAU",
    "MOT",
    "MOTEUR",
    "MOTO",
    "MOUCHOIR",
    "MOUFLE",
    "MOUILLE",
    "MOUILLER",
    "MOULIN",
    "MOUSSE",
    "MOYEN",
    "MUET",
    "MULTICOLORE",
    "MUR",
    "MUSCLE",
    "MUSIQUE",
    "NAGER",
    "NENUPHAR",
    "NEUF",
    "NŒUD",
    "NOIR",
    "NOM",
    "NOMBRE",
    "NOUVEAU",
    "NU",
    "NUMERO",
    "OBEIR",
    "OBJET",
    "OBLIGER",
    "ONGLE",
    "ORCHESTRE",
    "ORDINATEUR",
    "ORDRE",
    "OURS",
    "OUTIL",
    "OUVRIR",
    "PAGE",
    "PAIRE",
    "PANNE",
    "PANTALON",
    "PAPIER",
    "PARACHUTE",
    "PARCOURS",
    "PAREIL",
    "PARKING",
    "PARLER",
    "PARTAGER",
    "PARTIR",
    "PAS",
    "PASSERELLE",
    "PATAUGER",
    "PEDALO",
    "PEINDRE",
    "PEINTURE",
    "PELUCHE",
    "PENTE",
    "PERCER",
    "PERDRE",
    "PERLE",
    "PERSONNE",
    "PETIT",
    "PEU",
    "PEUR",
    "PHOTO",
    "PIED",
    "PIEDS",
    "PILOTE",
    "PINCEAU",
    "PION",
    "PLACARD",
    "PLAFOND",
    "PLAGE",
    "PLANCHE",
    "PLÂTRE",
    "PLEUVOIR",
    "PLI",
    "PLIAGE",
    "PLIER",
    "PLONGEOIR",
    "PLONGER",
    "PLUIE",
    "PLUS",
    "PNEU",
    "POCHE",
    "POIGNET",
    "POING",
    "POINT",
    "POINTE",
    "POINTU",
    "POISSON",
    "POLI",
    "POMPIERS",
    "PONT",
    "PORTE",
    "PORTEMANTEAU",
    "PORTER",
    "POSER",
    "POSTER",
    "POT",
    "POUBELLE",
    "POUCE",
    "POUSSER",
    "POUVOIR",
    "PREMIER",
    "PRENDRE",
    "PRENOM",
    "PREPARER",
    "PRES",
    "PRESENT",
    "PRESQUE",
    "PRESSER",
    "PRETER",
    "PRINCE",
    "PRISES",
    "PRIVER",
    "PROMETTRE",
    "PROPRE",
    "PUNAISE",
    "PUNIR",
    "PUZZLE",
    "PYJAMA",
    "PYRAMIDE",
    "QUAI",
    "QUATRE",
    "QUESTION",
    "RACONTER",
    "RADIATEUR",
    "RADIO",
    "RAME",
    "RAMPE",
    "RAMPER",
    "RANGER",
    "RATER",
    "RAYURE",
    "RECEVOIR",
    "RECITER",
    "RECOMMENCER",
    "RECREATION",
    "RECULER",
    "REFUSER",
    "REGARDER",
    "REINE",
    "REMETTRE",
    "REMPLACER",
    "REMPLIR",
    "RENTREE",
    "RENTRER",
    "RENVERSER",
    "REPARER",
    "REPETER",
    "REPONDRE",
    "RESPIRER",
    "RESSEMBLER",
    "RESTER",
    "RETARD",
    "REUSSIR",
    "REVENIR",
    "RIDEAU",
    "ROBE",
    "ROBINET",
    "ROI",
    "ROND",
    "ROUE",
    "ROUGE",
    "ROULADE",
    "ROULER",
    "ROUX",
    "RUBAN",
    "RUGUEUX",
    "SAGE",
    "SALADIER",
    "SALE",
    "SALLE",
    "SAUT",
    "SAUTER",
    "SAVON",
    "SCIE",
    "SEAU",
    "SEC",
    "SECHER",
    "SEMELLE",
    "SENS",
    "SENTIR",
    "SEPARER",
    "SEPT",
    "SERIEUX",
    "SERPENT",
    "SERRE",
    "SERRER",
    "SERRURE",
    "SERVIETTE",
    "SERVIR",
    "SEUL",
    "SIEGE",
    "SIESTE",
    "SILENCE",
    "SIX",
    "SOL",
    "SOLDAT",
    "SOLIDE",
    "SOMMEIL",
    "SONNER",
    "SONNETTE",
    "SORCIERE",
    "SORTIE",
    "SORTIR",
    "SOUFFLER",
    "SOULEVER",
    "SOULIGNER",
    "SOUPLE",
    "SOURD",
    "SOURIRE",
    "SOUS",
    "SPAGHETTI",
    "SPORT",
    "STYLO",
    "SUIVANT",
    "SUIVRE",
    "SUR",
    "SURFEUR",
    "TABLE",
    "TABLEAU",
    "TABLIER",
    "TABOURET",
    "TACHE",
    "TAILLE",
    "TAILLER",
    "TALON",
    "TAMBOUR",
    "TAMPON",
    "TAPER",
    "TAPIS",
    "TARD",
    "TASSE",
    "TELECOMMANDE",
    "TELEPHONE",
    "TELEVISION",
    "TENDRE",
    "TENIR",
    "TENNIS",
    "TERMINER",
    "TETE",
    "TIRER",
    "TIROIR",
    "TISSU",
    "TITRE",
    "TOBOGGAN",
    "TOILETTE",
    "TOMBER",
    "TORDU",
    "TOT",
    "TOUCHER",
    "TOUR",
    "TOURNER",
    "TOURNEVIS",
    "TRAIN",
    "TRAIT",
    "TRAMPOLINE",
    "TRANQUILLE",
    "TRANSPARENT",
    "TRANSPIRER",
    "TRANSPORTER",
    "TRAVAIL",
    "TRAVAILLER",
    "TRAVERSER",
    "TREMPER",
    "TRICHER",
    "TRICOT",
    "TRIER",
    "TROIS",
    "TROISIEME",
    "TROMPETTE",
    "TROP",
    "TROUER",
    "TROUS",
    "TROUSSE",
    "TUNNEL",
    "UN",
    "UNIFORME",
    "USE",
    "VACHE",
    "VALISE",
    "VASE",
    "VEHICULE",
    "VENIR",
    "VENTRE",
    "VERRE",
    "VERS",
    "VERSER",
    "VERT",
    "VESTE",
    "VETEMENT",
    "VIDER",
    "VIRAGE",
    "VIS",
    "VITE",
    "VITESSE",
    "VITRE",
    "VOITURE",
    "VOIX",
    "VOLER",
    "VOULOIR",
    "VOYAGE",
    "WAGON",
    "XYLOPHONE",
    "ZERO",
    "ZIGZAG"]

    return tableauMots;
}

function dessinerPendu(nombreErreur)
{
    switch(nombreErreur)
    {
        case 0:
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            break;

            case 1:
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("                      ")+ "\n";
            console.log("     ________         ")+ "\n";
            break;

            case 2:
            console.log("                      ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 3:
            console.log("     ________         ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 4:
            console.log("     ________         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 5:
            console.log("     ________         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |     O         ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 6:
            console.log("     ________         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |     O         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 7:
            console.log("     ________         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |     O         ")+ "\n";
            console.log("      |    /|\\        ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            case 8:
            console.log("     ________         ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |     O         ")+ "\n";
            console.log("      |    /|\\        ")+ "\n";
            console.log("      |     |         ")+ "\n";
            console.log("      |    / \\        ")+ "\n";
            console.log("      |               ")+ "\n";
            console.log("     _|_______        ")+ "\n";
            break;

            default:
            break;
    }
}

function testerLettre(lettre,tableau,depart)
{
    var tableauRec = array_slice(tableau,depart);
    var resultat = tableauRec.findIndex(lettre);

    if(resultat === -1)
    {
        return [];
    }
    else
    {
        var reponse = resultat + depart;
        var tableauPosition = array.concat(reponse, testerLettre(lettre, tableau, res+depart+1));
        return tableauPosition;
    }
}

function ajouterUneLettre(lettre, tableau, position)
{
    tableau[position] = lettre;
    return tableau;
}

function ajouterLesLettres(val,tableau,tableauPosition,niveau)
{
    switch(niveau)
    {
        case 1:
            for(i = 0; i<tableau.length; i++)
                {
                tableau = ajouterUneLettre(val, tableau, tableauPosition[i]);
            }
            return tableau;
        case 2:
        case 4:
            for (i = 0; i<tableau.length; i++) 
            {
                var positionEtudiee = tableauPosition[i];
                
                if (tableau[positionEtudiee] != val)
                {
                    tableau = ajouterUneLettre(val, tableau, positionEtudiee);
                    return tableau;
                }
            }
        return -1;
        case 3:
            var test = testerLettre(val,tableau,0); 
            var pos=array_filter(tableauPosition,test);     //différence entre les tableaux
            if(!empty(pos))        //s'il reste des lettres à placer
            {
                positionEtudiee=[Math.floor(Math.random() * pos)];    //on choisit une position au hasard
                tableau = ajouterUneLettre(val, tableau, pos[positionEtudiee]);
                return tableau;
            }
            else    //il n'y a plus de lettre à placer
            {
                return -1;
            }
    }
    return -1;
}

function afficherMauvaisesLettres(listeLettres)
{
    console.log("Les lettres non présentes sont ");
    var taille = listeLettres.length;

    for(i=0;i<taille;i++)
    {
        if(i == taille - 1)
        {
            console.log(listeLettres[i]+ "\n");
        }
        else
        {
            console.log(listeLettres[i] + ",");
        }
    }
}

function choisirMot(niv)
{
    var dico = creer_dico();

    if(niv==4) // mot <= à 4 lettres
    {
        do
        {
            var nb = [Math.floor(Math.random() * dico)];
        } while (dico[nb].length > 4)
        return dico[nb]
    }
    else
    {
        return dico[[Math.floor(Math.random() * dico)]]
    }
}

function demanderLettre()
{
    do
    {
        console.log("\n");
        var lettre = str.toUpperCase(window.prompt("Entrez une lettre : "));
    } while(alpha() || lettre.length > 1);
    return lettre;  
}

function testerGagner(nbErreur,tableau)
{
    if(nbErreur == 9)
    {
        return -1;
    }
    if(tableau.IndexOf("_") === false)
    {
        return 1;
    }
    return 0;
}

function choisirNiveau()
{
    do
    {
        window.alert("Niveau de difficulté : " + "\n");
        window.alert("Facile(1)" + "\t" + "Normal(2)" + "\t" + "Difficle(3)" + "\t" + "Court(4)" + "\t");
        var niveau = window.prompt("Quel est votre choix?");

        if(niveau > 4 || niveau < 1)
        {
            console.log("Saisie Incorrect! Recommencer (rappel : 1 ou 2 ou 3 ou 4)" + "\n");
        }
    } while(niveau > 4 || niveau < 1);

    switch ($niveau)
    {
        case 1:
            window.alert("Niveau facile! Go!" + "\n");
            break;
        case 2:
            window.alert("Niveau normal! Go!" + "\n");
            break;
        case 3:
            window.alert("Niveau difficile! Go!" + "\n");
            break;
        case 4:
            window.alert("Niveau court! Go!" + "\n");
            break;
    }
    return $niveau;
}

function lancerPartie(niveau)
{
    var motATrouver = choisirMot(niveau);
    console.log("\n");
    var tableauMotATrouver = string_split(motATrouver);
    var motCode = codeMot(motATrouver,niveau);
    var nbErreur = 0;
    var gagne = false;
    var mauvaiseLettres = [];

    do
    {
        console.log("\n"+"\n"+"\t");
        afficherTableau(motCode);
        dessinerPendu(nbErreur);

        if(!empty(mauvaiseLettres))
        {
            afficherMauvaisesLettres(mauvaiseLettres);
        }
        var lettre = demanderLettre();
        var lesPositions = testerLettre(lettre,tableauMotATrouver,0);

        if(empty(lesPositions))
        {
            nbErreur++;
            mauvaiseLettres = lettre;
        }
        else
        {
            var reponse = ajouterLesLettres(lettre,motCode,lesPositions,niveau);
            if (reponse == -1) // la lettre ne peut plus etre placée
            {
                nbErreur++;
                mauvaisesLettres = lettre;
            }
            else
            {
                motCode = reponse;
            }
        }
        var gagne = testerGagner(nbErreur, motCode);
    } while (gagne == 0);

    if (gagne == 1)
    {
        window.alert("Bravo, vous avez gagné. Le mot été " + motATrouver + "\n");
    }
    else
    {
        window.alert("Dommage, vous avez perdu. Le mot à trouver été " + motATrouver + "\n");
    }
}

// tableau = ["1","2","3"];
// afficherTableau(tableau);
// coderMot("michel",1);
// console.log(creer_dico());
// dessinerPendu(4);
// testerLettre("a",tableau,1);
// ajouterUneLettre("e",tableau,4);
//ajouterLesLettres("i",tableau,tableauPosition,niveau);
// ajouterMauvaisesLettres(listeLettres);
// choisirMot(4);
// demanderLettre();
// testerGagner(nbErreur,tableau);
// choisirNiveau();

// var niveau = choisirNiveau();
// lancerPartie(niveau);




