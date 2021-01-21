// Les Inputs
var siret = document.getElementById("siret");
var raisonSociale = document.getElementById("raisonSociale");
var formeJuridique = document.getElementById("formeJuridique");
var adresseEntreprise = document.getElementById("adresseEntreprise");
var numTelEnt = document.getElementById("numeroTelEnt");
var numSocietaire = document.getElementById("numeroSocietaire");
var assureur = document.getElementById("assureur");
var nomRepres = document.getElementById("nomRepresentant");
var prenomRepres = document.getElementById("prenomRepresentant");
var fonctionRepres = document.getElementById("fonctionRepresentant");
var mailRepres = document.getElementById("adresseMailRepresentant");
var numTelRepres = document.getElementById("numeroTelRepresentant");

var nomTuteur = document.getElementById("nomTuteur");
var prenomTuteur = document.getElementById("prenomTuteur");
var fonctionTuteur = document.getElementById("fonctionTuteur");
var numTuteur = document.getElementById("numeroTuteur");
var mailTuteur = document.getElementById("mailTuteur");

var valider = document.getElementById("valide");
var requ = new XMLHttpRequest();

// Liste Inputs
var listeInputs = document.getElementsByTagName("input");

// Valeur Inputs
siret.addEventListener("keyup", verification);
siret.addEventListener("keyup", recupValeur);
raisonSociale.addEventListener("keyup", verification);
formeJuridique.addEventListener("keyup", verification);
adresseEntreprise.addEventListener("keyup", verification);
numTelEnt.addEventListener("keyup", verification);
numSocietaire.addEventListener("keyup", verification);
assureur.addEventListener("keyup", verification);
nomRepres.addEventListener("keyup", verification);
prenomRepres.addEventListener("keyup", verification);
fonctionRepres.addEventListener("keyup", verification);
mailRepres.addEventListener("keyup", verification);
numTelRepres.addEventListener("keyup", verification);

nomTuteur.addEventListener("keyup", verification);
prenomTuteur.addEventListener("keyup", verification);
fonctionTuteur.addEventListener("keyup", verification);
numTuteur.addEventListener("keyup", verification);
mailTuteur.addEventListener("keyup", verification);

function validation() {
    valider.disabled = false;
    for (let i = 0; i < listeInputs.length; i++) {
        let input = listeInputs[i];
        if (input.value == "") {
            valider.disabled = true;
        }
    }
}

function verification(event) {
    var monInput = event.target;
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        message.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        message.innerHTML = "format incorrect";
        monInput.style.class = "incorrect";
    } else {
        message.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }

    validation();
}

var ville = document.getElementById("ville");


var region = document.getElementById("region");
region.addEventListener("change", changeRegion);

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            //on enleve les villes deja presents
            ville.innerHTML = "";
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutVilles(reponse[i].nomVille + '  ' + reponse[i].codePostal, reponse[i].idVille);
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function ajoutVilles(libelleVille, idVille) {

    let uneVille = document.createElement("option");
    uneVille.setAttribute("id", idVille);
    uneVille.innerHTML = libelleVille;
    ville.appendChild(uneVille);
}

function changeRegion(e) {
    if (region.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ.open('POST', 'index.php?page=VillesAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = region.value;
        var args = "idRegion=" + id + '&type=' + region.selectedOptions[0].getAttribute("type");
        requ.send(args);
    }
}

function recupValeur(e) {
        requ.open('POST', 'index.php?page=SiretAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var monInput = e.target;
        var args = "idEntreprise=" + id;
        requ.send(args);
}