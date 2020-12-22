function deplace(directionGauche, directionHaut) 
{
    var carreStyle = window.getComputedStyle(carre, null);
    var hautActuelle = carreStyle.top;
    var gaucheActuelle = carreStyle.left;

    carre.style.top = parseInt(hautActuelle) + directionHaut + 'px';
    carre.style.left = parseInt(gaucheActuelle) + directionGauche + 'px';
}

var carre = document.getElementById('carre');
var left = document.getElementById("gauche");
var right = document.getElementById("droite");
var up = document.getElementById("haut");
var down = document.getElementById("bas");

left.addEventListener("click", function () {
    deplace(-5, 0);
});
right.addEventListener("click", function () {
    deplace(5, 0);
});
up.addEventListener("click", function () {
    deplace(0, -5);
});
down.addEventListener("click", function () {
    deplace(0, 5);
});