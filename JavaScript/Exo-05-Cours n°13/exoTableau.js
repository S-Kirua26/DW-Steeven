/***********************************Exercice 1 *********************************************/

// var tableau = []
// var nombre = window.prompt("Combien de champ voulez vous entrez?");

// for(i=0;i<nombre;i++)
// {
//     var champ = window.prompt("Champ n° " + i);
//     tableau[i] = champ;
//     console.log(tableau);
// }

/***********************************Exercice 2 *********************************************/

function getInteger()
{
    var entier = window.prompt("Combien voulez-vous de poste?");
    return entier;
}

function initSaisieAfficheTab()
{
    var tableau = [];

    for(i=0;i<getInteger();i++)
    {
        var champ = window.prompt("Poste n° " + i);
        tableau[i] = champ;
        console.log(tableau);
    }
}

initSaisieAfficheTab();



