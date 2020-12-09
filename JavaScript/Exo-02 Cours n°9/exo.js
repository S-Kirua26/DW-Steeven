/***********************************Exercice 1 *********************************************/

// var nombre = window.prompt("Quel est le nombre choisi?");

// if (nombre % 2 == 0) {
//     window.alert("Le nombre est pair");
// } else {
//     window.alert("Le nombre est impair");
// }

/***********************************Exercice 2 *********************************************/

// var dateActuelle = new Date();
// var dateUtilisateur = prompt("entrer une date");
// var age = dateActuelle.getFullYear() - dateUtilisateur;

// window.alert("Vous avez " + age + " ans");

// if (age > 18) {
//     window.alert("Vous etes majeur");
// } else {
//     window.alert("Vous etes mineur");
// }

/***********************************Exercice 3 *********************************************/

// var nombre1 = window.prompt("Quel est le 1er nombre choisi?");
// var nombre2 = window.prompt("Quel est le 2eme nombre choisi?");
// var operateur = window.prompt("Quel est l'opérateur choisi? (+ , - , * ou /)");

// if (operateur != "+" || operateur != "-" || operateur != "*" || operateur != "/") {
//     window.alert("Operateur Inconnu, veuillez recommencer");
// } else {
//     var resultat = (nombre1 + nombre2);
//     window.alert("Cela fait: " + resultat);
// }

/***********************************Exercice 4 *********************************************/

// var prixProduit = window.prompt("Quel est le prix du produit?");
// var quantiteCommande = window.prompt("Combien en voulez-vous?");
// var total = prixProduit * quantiteCommande;
// var portMini = 6;

// if (total < 500) {
//     var port = (2 / 100) * total;
//     window.alert("Vos frait de port seront de: " + port + "euros");
// } else {
//     var port = 0;
//     window.alert("Vos frait de port seront gratuit");
// }

// if (total > 100 && total < 200) {
//     var remise = (5 / 100) * total;
//     window.alert("Vos frait de remise seront de: " + remise + "euros");
// } else {
//     var remise = (10 / 100) * total;
//     window.alert("Vos frait de remise seront de: " + remise + "euros");
// }

// var pap = (total - remise) + port + portMini;
// window.alert("Le prix total de votre achat est de: " + pap);

/***********************************Exercice 5 *********************************************/

var statut = window.confirm("Etes vous celibataire?");
var enfants = window.prompt("Combien avez vous d'enfants?");
var salaire = window.prompt("Quel est votre salaire?");

if (salaire < 1200) {
    window.alert("Votre patron participe à hauteur de 10%");
} else {
    if (statut == true) {
        var repasCelib = 20 + (enfants * 10)
        if (repasCelib > 50) {
            window.alert("Votre patron participe à hauteur de 50%");
        } else {
            window.alert("Votre patron participe à hauteur de " + repasCelib + "%");
        }
    } else {
        var repasMariee = 25 + (enfants * 10);
        if (repasMariee > 50) {
            window.alert("Votre patron participe à hauteur de " + repasMariee + "%");
        } else {
            window.alert("Votre patron participe à hauteur de " + 25 + (enfants * 10) + "%");
        }
    }
}