// function verifNom(){
//     // for (let i=0; i<nom.length; i++)
//     // {
//     //     if(nom.value.charCodeAt(i) != 39 && nom.value.charCodeAt(i) <= 64 && nom.value.charCodeAt(i) > 89 && nom.value.charCodeAt(i) <= 96 && nom.value.charCodeAt(i) >= 121 )
//     //     {
//     //         nom.value = nom.value.slice(0, -1);
//     //         divNom.textContent = "Erreur détectée";
//     //     }
//     //     else{
//     //         divNom.textContent = ' ';
//     //     }
//     // }

//     let content = nom.value;
//     let lettre  = content.charAt(content.length - 1);

//     if(!isNaN(lettre))
//     {
//         nom.value = nom.value.slice(0, -1);
//         nom.style.border = "4px solid red";
//         divNom.textContent = "lettre obligatoire";
//     }
//     else{
//         divNom.textContent = ' ';
//         nom.style.border = "4px solid green";
//     }
// }

function verifNom(){

    let content = verifBouton.value;

    if(!verifBouton[0].checkValidity())
    {
        console.log("message");
        verifBouton[0].value = verifBouton[0].value.slice(0, -1);
        verifBouton[0].style.border = "4px solid red";
        divNom.textContent = "lettre obligatoire";
    }
    else{
        divNom.textContent = ' ';
        verifBouton[0].style.border = "4px solid green";
    }
}

function verifPostal(){
        let content = codePostal.value;
        let lettre = content.charAt(content.length - 1);
    
        if (isNaN(lettre)) {
            codePostal.value = codePostal.value.slice(0, -1);
            codePostal.style.border = "4px solid red";
            divCodePostal.textContent = "5 chiffres";
        }
        else if(content.length <= 4){
            codePostal.style.border = "4px solid red";
        }
        else if(content.length > 5){
            codePostal.value = codePostal.value.slice(0, -1);
            codePostal.style.border = "4px solid red";
        }
        else {
            divCodePostal.textContent = ' ';
            codePostal.style.border = "4px solid green";
        }
}

function verifVille(){

    let content = ville.value;
    let lettre  = content.charAt(content.length - 1);

    if(!isNaN(lettre))
    {
        ville.value = ville.value.slice(0, -1);
        ville.style.border = "4px solid red";
        divCity.textContent = "lettre obligatoire";
    }
    else{
        ville.style.border = "4px solid green";
        divCity.textContent = ' ';
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
        divYears.textContent = "Date Incorrect";
    }
}

var nom = document.getElementById("input1");
var codePostal = document.getElementById("input2");
var ville = document.getElementById("input3");
var dateNaissance = document.getElementById("input4");

// nom.addEventListener("keyup", verifNom);
// codePostal.addEventListener("keyup", verifPostal);
// ville.addEventListener("keyup", verifVille);
// dateNaissance.addEventListener("keyup", verifDateNaissance);

var verifBouton = document.getElementsByClassName("checkInput");
verifBouton[0].addEventListener("keyup", verifNom);

var divCodePostal = document.getElementById("divPostal");
var divNom = document.getElementById("divName");
var divCity = document.getElementById("divVille");
var divYears = document.getElementById("divNaissance");




