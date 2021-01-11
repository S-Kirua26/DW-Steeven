// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var lieu = document.getElementById("lieu");
var temp = document.getElementById("temp");
var vent = document.getElementById("vent");
var contLieu = document.getElementById("contenuLieu");
var contTemp = document.getElementById("contenuTemps");
var contVent = document.getElementById("contenuVent");
var inputBouton = document.getElementById("bouton");
var valider = document.getElementById("valide");
var imageMeteo = document.getElementById("imgMeteo");

var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet

            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);

            contLieu.textContent =  reponse.name; // récupération de nom de la ville
            contTemp.textContent =  reponse.weather[0].description; // récupération du temp de la vile
            contVent.textContent =  reponse.main.temp + "°C"; // récupération de la tempétature de la ville
            // imageMeteo.style.src =  reponse.weather[0].icon; // récupération de l'image du temp de la ville
            let icone = reponse.weather[0].icon;

            imageMeteo.setAttribute("src", "./IMG/"+icone+".png");


            // on ajoute un evenement sur ligne pour afficher le detail
            // ligne.addEventListener("click", afficheDetail);

            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

// function afficheDetail(e) {
//     villeClique = (e.target).parentNode;
//     villeClique.removeEventListener("click", afficheDetail);
//     detail = document.createElement("div");
//     detail.setAttribute("class", "detail");
//     lieux = document.createElement("div");
//     lieux.setAttribute("class", "lieux");
//     detail.appendChild(lieux);
//     temps = document.createElement("div");
//     temps.setAttribute("class", "temps");
//     detail.appendChild(temps);
//     temperature = document.createElement("div");
//     temperature.setAttribute("class", "temperature");
//     detail.appendChild(temperature);
//     lieux.innerHTML = enregs[villeClique.id].name;
//     temps.innerHTML=" temps Actuelle " + enregs[villeClique.id].weather.description;
//     temperature.innerHTML=" temperature Actuelle " + enregs[villeClique.id].main.temp;
//     contenu.insertBefore(detail, villeClique.nextSibling);

// }

valider.addEventListener("click", function() {
    let recupBouton = inputBouton.value;
    //on envoi la requête
    req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q='+recupBouton+',fr&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
    req.send(null);
});

