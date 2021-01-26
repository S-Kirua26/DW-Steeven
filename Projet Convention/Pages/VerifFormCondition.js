// Les Inputs
var ponctualite = document.getElementById("ponctualite");
var presentation = document.getElementById("presentation");
var adaptation = document.getElementById("adaptation");
var relationPro = document.getElementById("relationPro");
var communication = document.getElementById("commuication");
var tacheAutonome = document.getElementById("tacheAutonome");
var respectConsigne = document.getElementById("respectConsigne");
var respectMateriel = document.getElementById("respectMateriel");
var agir = document.getElementById("agir");
var respectCritere = document.getElementById("respectCritere");
var respectHygiene = document.getElementById("respectHygiene");
var row = document.getElementById("test");
var nbLignes = 1;

// Valeurs Inputs
// ponctualite.addEventListener("", verification);
// presentation.addEventListener("", verification);
// adaptation.addEventListener("", verification);
// relationPro.addEventListener("", verification);
// communication.addEventListener("", verification);
// tacheAutonome.addEventListener("", verification);
// respectConsigne.addEventListener("", verification);
// respectMateriel.addEventListener("", verification);
// agir.addEventListener("", verification);
// respectCritere.addEventListener("", verification);
// respectHygiene.addEventListener("", verification);

creerLigne(nbLignes);

function creerLigne(nb) {

    var divContenu = document.createElement("div");
    row.appendChild(divContenu);

    // inputs type texte
    var divNeutre = document.createElement("div");
    divNeutre.setAttribute("class", "info colonne");
    console.log(divNeutre);
    divContenu.appendChild(divNeutre);

    var libelleA = document.createElement("div");
    libelleA.setAttribute("class", "blanc centre");
    divNeutre.appendChild(libelleA);

    var libelleAcquis = document.createElement("input");
    libelleAcquis.setAttribute("type", "texte");
    libelleAcquis.setAttribute("name", "libelleAcquis_" + nb)
    libelleA.appendChild(libelleAcquis);

    // inputs type radio
    var divNeutreDeux = document.createElement("div");
    divNeutreDeux.setAttribute("class", "centre double");
    console.log(divNeutreDeux);
    divContenu.appendChild(divNeutreDeux);

    var divOui = document.createElement("div");
    divNeutreDeux.appendChild(divOui);

    var labelOui = document.createElement("label");
    labelOui.textContent = "Oui";
    divOui.appendChild(labelOui);

    var inputOui = document.createElement("input");
    inputOui.setAttribute("type", "radio");
    inputOui.setAttribute("name", "valeurAcquis_" + nb);
    inputOui.setAttribute("value", 1);
    inputOui.addEventListener("click", clickAcquis);
    divOui.appendChild(inputOui);

    var divNon = document.createElement("div");
    divNeutreDeux.appendChild(divNon);

    var labelNon = document.createElement("label");
    labelNon.textContent = "Non";
    divNon.appendChild(labelNon);

    var inputNon = document.createElement("input");
    inputNon.setAttribute("type", "radio");
    inputNon.setAttribute("name", "valeurAcquis_" + nb);
    inputNon.setAttribute("value", 2);
    inputNon.addEventListener("click", clickAcquis);
    divNon.appendChild(inputNon);

    var divADev = document.createElement("div");
    divNeutreDeux.appendChild(divADev);

    var labelADev = document.createElement("label");
    labelADev.textContent = "A developper";
    divADev.appendChild(labelADev);

    var inputADev = document.createElement("input");
    inputADev.setAttribute("type", "radio");
    inputADev.setAttribute("name", "valeurAcquis_" + nb);
    inputADev.setAttribute("value", 3);
    inputADev.addEventListener("click", clickAcquis);
    divADev.appendChild(inputADev);

    var divObserve = document.createElement("div");
    divNeutreDeux.appendChild(divObserve);

    var labelObserve = document.createElement("label");
    labelObserve.textContent = "N'a pas pu être observé";
    divObserve.appendChild(labelObserve);

    var inputObserve = document.createElement("input");
    inputObserve.setAttribute("type", "radio");
    inputObserve.setAttribute("name", "valeurAcquis_" + nb);
    inputObserve.setAttribute("value", 4);
    inputObserve.addEventListener("click", clickAcquis);
    divObserve.appendChild(inputObserve);

    nbLignes++;
}

function clickAcquis(e) {
    var radio = e.target;
    var numLigne = radio.name.substring(13);
    console.log(numLigne);
    if (numLigne == nbLignes - 1) {
        creerLigne(nbLignes);
    }
}