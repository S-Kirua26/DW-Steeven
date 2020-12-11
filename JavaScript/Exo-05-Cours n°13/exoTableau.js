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

// function total ()
// {
//     var tableau = [];
//     var somme = 0;
//     var compteur = 0;
//     var max = 0;

//     var entier = window.prompt("Combien voulez-vous de poste?");

//     for(i=0;i<entier;i++)
//     {
//         var champ = parseInt(window.prompt("Poste n° " + i));
//         tableau[i] = champ;
//         console.log(tableau);

//         var res = champ;
//         var somme = somme + res;
//         compteur ++;
//     }
//     var moyenne = somme / compteur;
//     window.alert("La somme vaut " + somme);
//     window.alert("La moyenne vaut " + moyenne);

//     if(champ > max)
//     {
//         max = champ;
//     }

//     window.alert("Le poste le plus grand est " + max);
// }

// total();

/***********************************Exercice 3 *********************************************/

// var tableau = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t",];
// var longueur = tableau.length;
// var compteur = 0;

// window.alert("La longueur du tableau est de " + longueur);

// var demande = window.prompt("Quel est votre prenom choisi?");
// compteur = tableau.indexOf(demande);
// console.log(compteur);

// var supprimer = tableau.splice(compteur,1);
// console.table(tableau);

/***********************************Exercice 4 *********************************************/

// var tableau = [14, 95, 53, 23, 10, 1, 84];
// var echange;

// do{
//     echange = false;
//     for(var i=0; i < tableau.length-1; i++) 
//     {
//         if(tableau[i] > tableau[i+1]) 
//         {
//             var tmp = tableau[i];
//             tableau[i] = tableau[i+1];
//             tableau[i+1] = tmp;
//             echange = true;
//         }
//     }
// } while(echange);


// console.log(tableau);

/***********************************Exercice 5 *********************************************/

// var tableau = [666, 1, 7, 69, 33, 13];
// var i,j,tmp;
// var longueur = tableau.length;                 
    
//     for(i = 1; i < longueur; i++) 
//     {
//       tmp = tableau[i]
//       j = i - 1
//         while (j >= 0 && tableau[j] > tmp) 
//         {
//             tableau[j+1] = tableau[j]
//             j--
//         }
//         tableau[j+1] = tmp
//     }
    
// console.log(tableau);

/***********************************Exercice 6 *********************************************/













