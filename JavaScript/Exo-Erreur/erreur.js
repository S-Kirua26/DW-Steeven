function verifNom(){
    // for (let i=0; i<nom.length; i++)
    // {
    //     if(nom.value.charCodeAt(i) != 39 && nom.value.charCodeAt(i) <= 64 && nom.value.charCodeAt(i) > 89 && nom.value.charCodeAt(i) <= 96 && nom.value.charCodeAt(i) >= 121 )
    //     {
    //         nom.value = nom.value.slice(0, -1);
    //         spanNom.textContent = "Erreur détectée";
    //     }
    //     else{
    //         spanNom.textContent = ' ';
    //     }
    // }

    let content = nom.value;
    let lettre  = content.charAt(content.length - 1);

    if(!isNaN(lettre))
    {
        nom.value = nom.value.slice(0, -1);
        nom.style.border = "4px solid red";
        spanNom.textContent = "lettre obligatoire";
    }
    else{
        spanNom.textContent = ' ';
        nom.style.border = "4px solid green";
    }
}

function verifPostal(){
        let content = codePostal.value;
        let lettre = content.charAt(content.length - 1);
    
        if (isNaN(lettre)) {
            codePostal.value = codePostal.value.slice(0, -1);
            codePostal.style.border = "4px solid red";
            spanCodePostal.textContent = "5 chiffres";
        }else if(content.length > 5){
            codePostal.value = codePostal.value.slice(0, -1);
            codePostal.style.border = "4px solid red";
        }
        else {
            spanCodePostal.textContent = ' ';
            codePostal.style.border = "4px solid green";
        }
}

function verifVille(){

    let content = ville.value;
    let lettre  = content.charAt(content.length - 1);

    if(!isNaN(lettre))
    {
        ville.value = ville.value.slice(0, -1);
        spanCity.textContent = "lettre obligatoire";
    }
    else{
        spanCity.textContent = ' ';
    }
}

function verifDateNaissance(){
    let dateVerif = dateNaissance.value;
    let anneeVerif = parseInt(dateVerif.substring(0,4));
    let moisVerif = parseInt(dateVerif.substring(5,7));
    let jourVerif = parseInt(dateVerif.substring(8,10));

    let date = new Date(anneeVerif, moisVerif -1, jourVerif);
    let dateActuelle = new Date();
    
    if(date > dateActuelle)
    {
        spanYears.textContent = "Date Incorrect";
    }
}

var nom = document.getElementById("input1");
var codePostal = document.getElementById("input2");
var ville = document.getElementById("input3");
var dateNaissance = document.getElementById("input4");
var spanCodePostal = document.getElementById("spanPostal");
var spanNom = document.getElementById("spanName");
var spanCity = document.getElementById("spanVille");
var spanYears = document.getElementById("spanDateNaissance");

nom.addEventListener("keyup", verifNom);
codePostal.addEventListener("keyup", verifPostal);
ville.addEventListener("keyup", verifVille);
dateNaissance.addEventListener("keyup", verifDateNaissance);


