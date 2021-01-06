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

// function verifPostal(){
//         let content = codePostal.value;
//         let lettre = content.charAt(content.length - 1);
    
//         if (isNaN(lettre)) {
//             codePostal.value = codePostal.value.slice(0, -1);
//             codePostal.style.border = "4px solid red";
//             divCodePostal.textContent = "5 chiffres";
//         }
//         else if(content.length <= 4){
//             codePostal.style.border = "4px solid red";
//         }
//         else if(content.length > 5){
//             codePostal.value = codePostal.value.slice(0, -1);
//             codePostal.style.border = "4px solid red";
//         }
//         else {
//             divCodePostal.textContent = ' ';
//             codePostal.style.border = "4px solid green";
//         }
// }

// function verifVille(){

//     let content = ville.value;
//     let lettre  = content.charAt(content.length - 1);

//     if(!isNaN(lettre))
//     {
//         ville.value = ville.value.slice(0, -1);
//         ville.style.border = "4px solid red";
//         divCity.textContent = "lettre obligatoire";
//     }
//     else{
//         ville.style.border = "4px solid green";
//         divCity.textContent = ' ';
//     }
// }

// function verifDateNaissance(){
//     let dateVerif = dateNaissance.value;
//     let anneeVerif = parseInt(dateVerif.substring(0,4));
//     let moisVerif = parseInt(dateVerif.substring(5,7));
//     let jourVerif = parseInt(dateVerif.substring(8,10));

//     let date = new Date(anneeVerif, moisVerif -1, jourVerif);
//     let dateActuelle = new Date();
    
//     if(date > dateActuelle)
//     {
//         divYears.textContent = "Date Incorrect";
//     }
// }

var nom = document.getElementById("input1");
var codePostal = document.getElementById("input2");
var ville = document.getElementById("input3");
var dateNaissance = document.getElementById("input4");
var numTel = document.getElementById("input5");
var mailAdress = document.getElementById("input6");
var motDePasse = document.getElementById("input7");
var confirmMDP = document.getElementById("input8");
var oeil = document.getElementById("oeil");
var commentaire = document.getElementById("input9");

nom.addEventListener("keyup", verification);
codePostal.addEventListener("keyup", verification);
ville.addEventListener("keyup", verification);
dateNaissance.addEventListener("change", verificationDN);
numTel.addEventListener("keyup", verification);
mailAdress.addEventListener("keyup", verification);
motDePasse.addEventListener("keyup", verification);
confirmMDP.addEventListener("keyup", verificationMDP);
oeil.addEventListener("mousedown", function (){ 
    affichePassWord(true);
});
oeil.addEventListener("mouseup", function (){ 
    affichePassWord(false);
});

var verifBouton = document.getElementsByClassName("checkInput");
verifBouton[0].addEventListener("keyup", verification);

function verification(event)
{
    var monInput = event.target;
    var imageVerte = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imageRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if(monInput.value == '')
    {
        imageRouge.style.visibility = "hidden";
        imageVerte.style.visibility = "hidden";
        message.innerHTML = "champ manquant";
    }else if(!monInput.checkValidity())
    {
        imageRouge.style.visibility = "visible";
        imageVerte.style.visibility = "hidden";
        message.innerHTML = "format incorrect";
        monInput.style.border = "4px solid red";
    }else{
        imageRouge.style.visibility = 'hidden';
        imageVerte.style.visibility = 'visible';
        message.innerHTML = "";
        monInput.style.border = "4px solid green";
    }

    if (monInput.id=="input7"){
        oeil.style.visibility="visible";
    }
}

function verificationDN(event){

    var monInput = event.target;
    var imageVerte = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imageRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    let dateVerif = dateNaissance.value;
    let anneeVerif = parseInt(dateVerif.substring(0,4));
    let moisVerif = parseInt(dateVerif.substring(5,7));
    let jourVerif = parseInt(dateVerif.substring(8,10));

    let date = new Date(anneeVerif, moisVerif -1, jourVerif);
    let dateActuelle = new Date();
    
    if(date > dateActuelle)
    {
        imageRouge.style.visibility = "visible";
        imageVerte.style.visibility = "hidden";
        message.innerHTML = "date incorrect";
        monInput.style.border = "4px solid red";
    }
    else{
        imageRouge.style.visibility = 'hidden';
        imageVerte.style.visibility = 'visible';
        message.innerHTML = "";
        monInput.style.border = "4px solid green";
    }
}

function verificationMDP(event) {
    var monInput = event.target;
    var pass = motDePasse.value;
    var res = confirmMDP.value;
    var imageVerte = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imageRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName('message')[0];

    if (monInput.value === "") {
        imageRouge.style.visibility = 'hidden';
        imageVerte.style.visibility = 'hidden';
        message.innerHTML = "champ manquant";
    } else if (res === pass) {
        imageRouge.style.visibility = 'hidden';
        imageVerte.style.visibility = 'visible';
        message.innerHTML = "";
        monInput.style.border = "4px solid green";
    } else {
        imageRouge.style.visibility = 'visible';
        imageVerte.style.visibility = 'hidden';
        message.innerHTML = "Mot de passe non identique";
        monInput.style.border = "4px solid red";
    }
}

function affichePassWord(flag){
    if (flag == true) 
    {
        motDePasse.type="text";
    }
    else 
    {
        motDePasse.type="password";
    }
}





