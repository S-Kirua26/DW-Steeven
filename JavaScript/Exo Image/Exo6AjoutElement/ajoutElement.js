
function ajouterDessert (){
    var nouveauLi = document.createElement("li");
    nouveauLi.textContent = prompt("quel dessert voulez vous ajouter?");
    nouveauLi.addEventListener("click",  modifierDessert );
    nouveauLi.addEventListener("click",  suppDessert );
    document.getElementById("desserts").appendChild(nouveauLi);
}

function modifierDessert(e)
{
    e.target.textContent = prompt("Quel est le dessert que vous voulez ajouter?",e.target.textContent);
}

function suppDessert(e)
{
    liClique = e.target;
    parent = liClique.parentNode; // on recupere l'element parent
    parent.removeChild(liClique);    // on supprime l'element enfant
}

var ajoutElementBouton = document.querySelector("button");
ajoutElementBouton.addEventListener("click", ajouterDessert);