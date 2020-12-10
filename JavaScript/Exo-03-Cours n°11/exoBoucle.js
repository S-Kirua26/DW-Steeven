/***********************************Exercice 1 *********************************************/
// var i = 0;

// do
// {
//     var boucle = window.prompt("Entrez le prenom n° " + i);
//     var compteur = i++;
//     console.log(boucle);

// } while(boucle != "")

// window.alert("Vous avez inscrit " + compteur + "prenoms");

/***********************************Exercice 2 *********************************************/

// var nombre = parseInt(window.prompt("Quel est le chiffre que vous me donnez?"));

// for (i=0;i<nombre;i++)
// {
//     window.alert("Les nombres inférieurs a votre nombre saisie: " + i);
// }

/***********************************Exercice 3 *********************************************/

// var nombre = parseInt(window.prompt("Quel est le chiffre que vous me donnez?"));
// var somme = 0;

// for(i=0;i<nombre;i++)
// {
//     var res = i;
//     var somme = somme + res
// }

// window.alert("La somme total est de " + somme);

/***********************************Exercice 4 *********************************************/

// var nombre1 = parseInt(window.prompt("Quel est le chiffre que vous me donnez en premier?"));
// var nombre2 = parseInt(window.prompt("Quel est le chiffre que vous me donnez en deuxieme?"));
// var somme = 0;

// for(i=nombre1;i<nombre2;i++)
// {
//     var res = i;
//     var somme = somme + res
// }

// window.alert("La somme total est de " + somme);

/***********************************Exercice 5 *********************************************/

// var somme = 0;
// var moyenne = 0;
// var i =  0;

// do 
// {
//     var saisi = parseInt(window.prompt("Quel est la valeur saisi?"));
//     var compteur = i++;
//     somme = somme + saisi;
    
// } while(saisi != 0)

// moyenne = somme / compteur;
// window.alert("La somme vaut" + somme);
// window.alert("La moyenne vaut" + moyenne);

/***********************************Exercice 6 *********************************************/

// var somme = 0;
// var moyenne = 0;
// var i =  0;
// var min = 0;
// var max = 0;

// do 
// {
//     var saisi = parseInt(window.prompt("Quel est la valeur saisi?"));

//     if(saisi < min && saisi != 0)
//     {
//         min = saisi;
//     }
//     if(saisi > max)
//     {
//         max = saisi;
//     }

//     var compteur = i++;
//     somme = somme + saisi;
    
// } while(saisi != 0)

// moyenne = somme / compteur;
// window.alert("La somme vaut" + somme);
// window.alert("La moyenne vaut" + moyenne);
// window.alert("La valeur min vaut" + min);
// window.alert("La valeur max vaut" + max);

/***********************************Exercice 7 *********************************************/

// var nombre1 = parseInt(window.prompt("Quel est votre premier nombre?"));
// var nombre2 = parseInt(window.prompt("Quel est votre second nombre?"));

// for(i=0;i<=nombre1;i++)
// {
//     var res = i * nombre2;
//     console.log(nombre1 + "*" + nombre2 + "=" + res);
// }

/***********************************Exercice 8 *********************************************/

// var mot = window.prompt("Quel est votre mot choisi?");

// var nbLettre = mot.length;
// var i = 0;

// window.alert("Il y a " + nbLettre + " lettres dans votre mot");

// for(i=0;i<=mot.length;i++)
// {
//     var lettre = mot.substr(0,1);
//     if()

// }

/***********************************Exercice 9 *********************************************/

// do{
//     var age = parseInt(window.prompt("Quel est votre premier nombre?"));

//     if(age < 21)
//     {
//         console.log("Vous etes dans la catégorie jeune");
//     }
//     if(age > 20 && age < 41)
//     {
//         console.log("Vous etes dans la catégorie moyen");
//     }
//     if(age > 40)
//     {
//         console.log("Vous etes dans la catégorie vieux");
//     }
        
// }while(age < 101)

/***********************************Exercice 10 *********************************************/

var nombre = parseInt(window.prompt("Quel est votre nombre?"));
var i = 2;

for (i=2;i<nombre;i++)
{
    if(nombre%i == 0)
    {
        window.alert("Votre nombre est premier");
    }
    else
    {
        window.alert("Votre nombre n'est pas premier");
    }
}
