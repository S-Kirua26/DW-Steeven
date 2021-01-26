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
var requ = new XMLHttpRequest();

// Valeurs Inputs
ponctualite.addEventListener("", verification);
presentation.addEventListener("", verification);
adaptation.addEventListener("", verification);
relationPro.addEventListener("", verification);
communication.addEventListener("", verification);
tacheAutonome.addEventListener("", verification);
respectConsigne.addEventListener("", verification);
respectMateriel.addEventListener("", verification);
agir.addEventListener("", verification);
respectCritere.addEventListener("", verification);
respectHygiene.addEventListener("", verification);