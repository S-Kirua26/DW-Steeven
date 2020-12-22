function deplaceTouche(directionHaut, directionGauche) {
    var deplacement = true;
    var carreStyle = window.getComputedStyle(document.getElementById('carre'), null);
    var top = parseInt(carreStyle.top);
    var left = parseInt(carreStyle.left);
    var width = parseInt(carreStyle.width);
    var height = parseInt(carreStyle.height);
    var listeObstacle = document.querySelectorAll('.obstacle');
    listeObstacle.forEach(function (elt) 
    {
        var obstacleStyle = window.getComputedStyle(elt, null);
        var topObstacle = parseInt(obstacleStyle.top);
        var leftObstacle = parseInt(obstacleStyle.left);
        var widthObstacle = parseInt(obstacleStyle.width);
        var heightObstacle = parseInt(obstacleStyle.height);
        if (!depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top + directionHaut, left + directionGauche, width, height))
        {
            compteurCollision ++;
            document.getElementById("compteur").innerHTML = "collision n°" + compteurCollision;
            // console.log("collision n°" + compteurCollision + " " + elt.id);
        }
        deplacement = deplacement && depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top + directionHaut, left + directionGauche, width, height);

    });
    if (deplacement) {
        document.getElementById('carre').style.top = top + directionHaut + 'px';
        document.getElementById('carre').style.left = left + directionGauche + 'px';
    }
}

function deplaceSouris(e) {
    var arriveeCase=document.querySelector("#arrive");
    if (arrivee(arriveeCase, parseInt(e.clientY)+ecartY,parseInt(e.clientX)+ecartX)) {
        console.log("gg")
    }
    else if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

function collisionUnObstacle(obstacle, posX, posY) {
    var styleObjet = window.getComputedStyle(carre);
    var width = parseInt(styleObjet.width);
    var height = parseInt(styleObjet.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var topObstacle = parseInt(styleObstacle.top);
    var leftObstacle = parseInt(styleObstacle.left);
    var widthObstacle = parseInt(styleObstacle.width);
    var heightObstacle = parseInt(styleObstacle.height);
    if (posY < leftObstacle + widthObstacle && posY + width > leftObstacle && posX < topObstacle + heightObstacle && posX + height > topObstacle) {
        document.getElementById("compteur").innerHTML = "collision n°" + compteurCollision;
        // console.log("collision n°" + compteurCollision + "  " + obstacle.id);
        flagMouv = false;
        compteurCollision++;
        return true;
    }
    return false;
}

function collisionObstacles(posX, posY) {
    var pasCollision = true;
    var listeObstacles = document.querySelectorAll('.obstacle');
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

function arrivee(arrivee,posX,posY)
{
    var styleObjet = window.getComputedStyle(carre);
    var width = parseInt(styleObjet.width);
    var height = parseInt(styleObjet.height);
    var styleArrivee = window.getComputedStyle(arrivee);
    var topObstacle = parseInt(styleArrivee.top);
    var leftObstacle = parseInt(styleArrivee.left);
    var widthObstacle = parseInt(styleArrivee.width);
    var heightObstacle = parseInt(styleArrivee.height);
    if(posY < leftObstacle + widthObstacle && posY + width > leftObstacle && posX < topObstacle + heightObstacle && posX + height > topObstacle)
    {
        window.alert("Vous avez réussi le labyrinthe ! \nNombre de collision effectué: " + compteurCollision);
        flagMouv = false;
        return true;
    }
}

function depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top, left, width, heigth) {
    if (left < leftObstacle + widthObstacle && left + width > leftObstacle && top < topObstacle + heightObstacle && top + heigth > topObstacle) {
        if(obstacle.class == "arrive")
        {
            window.alert("Vous avez réussi le labyrinthe ! \nNombre de collision effectué: " + compteurCollision);
        }
        return false
    }
    return true;
}

function commencer()
{
    intervaltimer = setInterval(timer, 1000);
}

function fin() 
{
  clearInterval(intervaltimer);
  document.getElementById("timer").innerHTML = "Temps écoulé, vous avez perdu";	
}

function timer() 
{
    temp--;
    if(temp == 0) 
    {
        fin();
        temp = 0;
    }
    else {	
        document.getElementById("timer").innerHTML = temp + " secondes restantes";
    }	
}

var ecartY, ecartX; 
var carre = document.getElementById('carre');
var flagMouv = false;
var compteurCollision = 0;

carre.addEventListener("mousedown", (e) => {
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    flagMouv = true;
});

document.addEventListener("mousemove", (e) => {
    if (flagMouv == true) {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) => {
    flagMouv = false;
});

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

var temp = 30;
var intervaltimer = null;
var resultBouton = document.getElementById("bouton");

resultBouton.addEventListener("click", function() {
    commencer();
});




