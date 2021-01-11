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
var leverSoleil = document.getElementById("contenuSunRise");
var coucherSoleil = document.getElementById("contenuSunSet");

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
            let icone = reponse.weather[0].icon;
            imageMeteo.setAttribute("src", "./IMG/"+icone+".png"); // récupération de l'image du temp de la ville
            // leverSoleil.textContent = reponse.sys.sunrise;
            // coucherSoleil.textContent = reponse.sys.sunset;

            let heureJour = reponse.sys.sunrise * 1000;
            let ls = new Date(heureJour);
            let heureNuit = reponse.sys.sunset * 1000;
            let cs = new Date(heureNuit);
            let heureActu = new Date();

            leverSoleil.textContent = ls;
            coucherSoleil.textContent = cs;

            if(ls > heureActu)
            {
                contenu.style.backgroundColor = "black"
            }
            else{
                contenu.style.backgroundColor = "wheat"
            }

            
            // on ajoute un evenement sur ligne pour afficher le detail
            // ligne.addEventListener("click", afficheDetail);

            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            contLieu.textContent = "Aucune météo pour cette ville";
        }
    }
};

valider.addEventListener("click", function() {
    let recupBouton = inputBouton.value;
    //on envoi la requête
    req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q='+recupBouton+',&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
    //enlever fr aprés recup pour les villes des autres pays
    req.send(null);
});


