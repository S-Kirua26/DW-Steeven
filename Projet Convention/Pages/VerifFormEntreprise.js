// Les Inputs
var siret = document.getElementById("siret");
var raisonSociale = document.getElementById("raisonSociale");
var formeJuridique = document.getElementById("formeJuridique");
var adresse = document.getElementById("adresse");
var represLegal = document.getElementById("representantLegal");
var fonction = document.getElementById("fonction");
var mail = document.getElementById("adresseMail");
var numTel = document.getElementById("numeroTel");
var assureur = document.getElementById("assureur");
var numSocietaire = document.getElementById("numeroSocietaire");
var tuteur = document.getElementById("tuteur");
var fonctionTuteur = document.getElementById("fonctionTuteur");
var numTuteur = document.getElementById("numeroTuteur");
var mailTuteur = document.getElementById("mailTuteur");

// Liste Inputs
var listeInputs = document.getElementsByTagName("input");

// Valeur Inputs
siret.addEventListener("keyup", verification);
raisonSociale.addEventListener("keyup", verification);
formeJuridique.addEventListener("keyup", verification);
adresse.addEventListener("keyup", verification);
represLegal.addEventListener("keyup", verification);
fonction.addEventListener("keyup", verification);
mail.addEventListener("keyup", verification);
numTel.addEventListener("keyup", verification);
assureur.addEventListener("keyup", verification);
numSocietaire.addEventListener("keyup", verification);
tuteur.addEventListener("keyup", verification);
fonctionTuteur.addEventListener("keyup", verification);
numTuteur.addEventListener("keyup", verification);
mailTuteur.addEventListener("keyup", verification);


function verification(event)
{
    var monInput = event.target;
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if(monInput.value == '')
    {
        monInput.style.border = "2px solid orange";
        message.innerHTML = "champ manquant";
    }else if(!monInput.checkValidity())
    {
        message.innerHTML = "format incorrect";
        monInput.style.border = "2px solid red";
    }else{
        message.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }
}
