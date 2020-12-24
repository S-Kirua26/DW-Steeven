function appuieBouton(element) {
    var boutonClique = element.target; // je récupére quel est le bouton cliqué
    boutonVide = document.getElementsByClassName("boutonSpecial")[0]; // je recupere la classe du bouton vide
    var xClique = parseInt(element.target.getAttribute("coordX")); // je récupére l'abscisse du bouton
    var yClique = parseInt(element.target.getAttribute("coordY")); // je récupére l'ordonnée du bouton

    if ((Math.abs(xVide - xClique) == 1 ^ Math.abs(yVide - yClique) == 1) && ((Math.abs(yVide - yClique) <2 ) && (Math.abs(xVide - xClique) <2 ))) {
        xVide = xClique;
        yVide = yClique;
        boutonVide.innerHTML = boutonClique.innerHTML;
        boutonClique.innerHTML = "";
        boutonClique.setAttribute('class', 'boutonSpecial');
        boutonVide.setAttribute('class', 'bouton');
    }
}

var lesBoutons = document.getElementsByClassName("bouton");

for (let i = 0; i < lesBoutons.length; i++) {
    lesBoutons[i].addEventListener("click", appuieBouton);
}

var boutonVide = document.getElementsByClassName("boutonSpecial")[0]; // je recupere la classe du bouton vide
boutonVide.addEventListener("click", appuieBouton);

var xVide = 3;
var yVide = 3;

var nb = [1, 2, 3, 4, 5, 6, 7, 8];
nb = nb.map(p => [p, Math.random()]);
nb = nb.sort((a, b) => a[1] - b[1]);
nb = nb.map(p => p[0]);

for (let i = 0; i < nb.length; i++) {
    lesBoutons[i].textContent = nb[i];
}

