////////////////////////////////////////////////////// Inputs ////////////////////////////////////////

var capital = document.getElementById("capital");
var taux = document.getElementById("tauxNominal");
var dureeEmprunt = document.getElementById("duree");
var mensualite = document.getElementById("mensualite");
var cout = document.getElementById("cout");
var erreur = document.getElementsByClassName("erreur");
var reset = document.getElementById("newCalcul");
var calcul = document.getElementById("calculer");

//////////////////////////////////////////////////// Valeurs Inputs //////////////////////////////////

capital.addEventListener("keyup", verification);
taux.addEventListener("keyup", verification);
dureeEmprunt.addEventListener("keyup", verification);
calcul.addEventListener("click", calculTotal);
reset.addEventListener("click", resetInput)

//////////////////////////////////////////// Les différentes fonctions ///////////////////////////////

// La fonction verification permet de verifier si les champs inputs sont valide
function verification(event) {
    var monInput = event.target;
    var erreur = (monInput.parentNode).getElementsByClassName("erreur")[0];

    if (monInput.value == '') {
        erreur.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        erreur.innerHTML = "format incorrect";
    } else {
        erreur.innerHTML = "";
    }
}

// La fonction calculTotal permet le calcul de la mensualité et du coût total
function calculTotal(event) {
    var resCapital = capital.value;
    var resTaux = taux.value;
    var resDuree = dureeEmprunt.value;
    var resMensualite = (resCapital * resTaux / 12) / (1 - Math.pow(1 + resTaux / 12, -resDuree));

    mensualite.value = resMensualite;
    cout.value = (Number(resCapital) + resMensualite);
}

// La fonction resetInput permet de vider les champs inputs
function resetInput(event) {
    capital.value = "";
    taux.value = "";
    dureeEmprunt.value = "";
    mensualite.value = "";
    cout.value = "";
}