var nom = window.prompt("Quel est votre nom?");
var prenom = window.prompt("Quel est votre prenom?");

var sexe = window.confirm("Etes vous un homme?");

window.alert("Bienvenue" + " " + nom + " " + prenom);

if (sexe == true) {
    window.alert("Vous etes un Homme");
} else {
    window.alert("Vous etes une Femme");
}