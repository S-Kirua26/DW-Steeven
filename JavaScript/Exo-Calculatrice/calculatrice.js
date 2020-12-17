var lesBoutons = document.getElementsByClassName("bouton");

for(let i=0; i<lesBoutons.length;i++)
{
    lesBoutons[i].addEventListener("click", appuieBouton);
}

var afficheur = document.getElementById("resultat");
var reset = document.getElementById("clear");
var supprimer = document.getElementById("supprimer");

supprimer.addEventListener("click",function(){
    resultat = afficheur.textContent;
    afficheur.textContent = afficheur.textContent.slice(0,-(supprimer.textContent.length +1)); // permet de retirer le mot "supprime" lors de l'affichage
});

reset.addEventListener("click",function(){
    //permet de vider l'afficheur 
        afficheur.textContent = "";
    // on autorise ne nouveau à cliquer sur les boutons
    for (let i=0; i<lesBoutons.length; i++) {
        lesBoutons[i].addEventListener("click",appuieBouton);
    }
});

function appuieBouton(e)
{
    // On recupere les information du bouton lorque l'on clique dessus
    var boutonClique = e.target;
    var valeurBouton = boutonClique.textContent;

    if(valeurBouton == "=")
    {
        afficheur.textContent += "=" + eval(afficheur.textContent);

        // Une fois le resultat final obtenue (click sur le bouton "="), on interdit de cliquer sur les autres boutons sauf reset
        for(let i=0; i<lesBoutons.length; i++)
        {
            lesBoutons[i].removeEventListener("click",appuieBouton);
        }
    }
    else
    {
        // on affiche la valeur du bouton qui a été cliqué
        afficheur.textContent += valeurBouton;
    }
    
}

// si les attributs sont natif, on les appels direct
var button = document.getElementsByTagName("button")[0];
var buttonValue = button.value;

// si les attributs sont personnel, on utilise getAttribute
var valeurValue = reset.getAttribute("value");
