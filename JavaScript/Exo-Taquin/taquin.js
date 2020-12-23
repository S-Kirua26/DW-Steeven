var lesBoutons = document.getElementsByClassName("bouton");

for (let i = 0; i < lesBoutons.length; i++) {
    lesBoutons[i].addEventListener("click", appuieBouton);
}

var xVide = 3;
var yVide = 3;

var nb = [1, 2, 3, 4, 5, 6, 7, 8];
nb = nb.map(p => [p, Math.random()]);
nb = nb.sort((a, b) => a[1] - b[1]);
nb = nb.map(p => p[0]);

for (let i = 0; i < nb.length; i++) {
    lesBoutons[i].textContent = nb[i];
}

function appuieBouton(element) {
    var boutonClique = element.target; // je récupére quel est le bouton cliqué
    var valeurBouton = boutonClique.textContent; // je récupére la valeur du bouton cliqué
    var xClique = parseInt(element.target.getAttribute("coordX")); // je récupére l'abscisse du bouton
    var yClique = parseInt(element.target.getAttribute("coordY")); // je récupére l'ordonnée du bouton
    var styleBoutonPlein = element.target.style.backgroundColor = "black"; // je récupére la couleur de fond des bouton pleins
    var styleBoutonVide = element.target.style.backgroundColor = "white"; // je récupére la couleur de fond du bouton vide

    // console.log(valeurBouton);
    // console.log(xClique);
    // console.log(yClique);

    if (Math.abs(xVide - xClique) == 1 ^ Math.abs(yVide - yClique) == 1) {
        xVide = xClique;
        yVide = yClique;
        boutonClique = styleBoutonVide;
        boutonClique = element.target.textContent = "";
    }


}