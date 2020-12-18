function deplaceTouche(directionHaut,directionGauche)
{
    var carreStyle = window.getComputedStyle(carre, null);
    var hautActuelle = carreStyle.top;
    var gaucheActuelle = carreStyle.left;

    carre.style.top = parseInt(hautActuelle) + directionHaut + 'px';
    carre.style.left = parseInt(gaucheActuelle) + directionGauche + 'px';
}

var carre = document.getElementById('carre');
// var left = document.getElementById("gauche");
// var right = document.getElementById("droite");
// var up = document.getElementById("haut");
// var down = document.getElementById("bas");

window.addEventListener("keydown",function(e) {
    switch(e.key) {
        case "ArrowLeft":  
            deplaceTouche(0, -5);
        break;
    
        case "ArrowUp":
            deplaceTouche(-5, 0);
        break;
    
        case "ArrowRight":  
            deplaceTouche(0, 5);
        break;
    
        case "ArrowDown": 
            deplaceTouche(5, 0); 
        break;

        case "4":  
            deplaceTouche(0, -5);
        break;
    
        case "8":
            deplaceTouche(-5, 0);
        break;
    
        case "6":  
            deplaceTouche(0, 5);
        break;
    
        case "2": 
            deplaceTouche(5, 0); 
        break;
        }
});


