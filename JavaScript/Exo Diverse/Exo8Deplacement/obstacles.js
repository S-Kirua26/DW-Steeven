function deplaceTouche(directionHaut, directionGauche) {
    var deplacement = true;
    var carreStyle = window.getComputedStyle(document.getElementById('carre'), null);
    var top = parseInt(carreStyle.top);
    var left = parseInt(carreStyle.left);
    var width = parseInt(carreStyle.width);
    var height = parseInt(carreStyle.height);
    var listeObstacle = document.querySelectorAll('.obstacle');
    listeObstacle.forEach(function (elt) {
        var obstacleStyle = window.getComputedStyle(elt, null);
        var topObstacle = parseInt(obstacleStyle.top);
        var leftObstacle = parseInt(obstacleStyle.left);
        var widthObstacle = parseInt(obstacleStyle.width);
        var heightObstacle = parseInt(obstacleStyle.height);
        if (!depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top + directionHaut, left + directionGauche, width, height))
        {
            compteurCollision ++;
            console.log("collision n°" + compteurCollision + " " + elt.id);
        }
        deplacement = deplacement && depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top + directionGauche, left + directionHaut, width, height);

    });
    if (deplacement) {
        document.getElementById('carre').style.top = top + directionGauche + 'px';
        document.getElementById('carre').style.left = left + directionHaut + 'px';
    }
}

function deplaceSouris(e) {
    if (!collisionObstacles(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX)) {
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
        console.log("collision n°" + compteurCollision + "  " + obstacle.id);
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

function depl_ok(topObstacle, leftObstacle, widthObstacle, heightObstacle, top,left, width, heigth) {
    if (left < leftObstacle + widthObstacle && left + width > leftObstacle && top < topObstacle + heightObstacle && top + heigth > topObstacle) {
        return false
    }
    return true;
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
            deplaceTouche(-5, 0);
        break;
    
        case "ArrowUp":
            deplaceTouche(0, -5);
        break;
    
        case "ArrowRight":  
            deplaceTouche(5, 0);
        break;
    
        case "ArrowDown": 
            deplaceTouche(0, 5); 
        break;

        case "4":  
            deplaceTouche(-5, 0);
        break;
    
        case "8":
            deplaceTouche(0, -5);
        break;
    
        case "6":  
            deplaceTouche(5, 0);
        break;
    
        case "2": 
            deplaceTouche(0, -5); 
        break;
        }
});

function decrementerChrono() {
 
    /* On récupère la valeur de la div chrono (20) */
    var secondes = document.getElementById("chrono").innerHTML;
    //alert(secondes);
    /* Si elle est plus grande que 0 on la décrémente
     * et on rappelle la fonction */
    if (secondes > 0) {
        secondes --;
        document.getElementById("chrono").innerHTML = secondes;
        //alert(document.getElementById("chrono").innerHTML = secondes);
        var ok = window.setTimeout("decrementerChrono()", 1000);
        //alert("ok = " + ok);
    } else {
        document.getElementById("chrono").innerHTML = "Ça y est c'est fini gros, t'as perdu " + "<br />";
        stopChrono();
    }
}

var chronometre = 30;
var intervalChronometre = null;

function commencer()
{
    intervalChronometre = setInterval(chrono, 1000);
}

function fin() 
{
  clearInterval(intervalChronometre);
  document.getElementById("chrono").innerHTML = "Temps écoulé, vous avez perdu";	
}

function chrono() 
{
    chronometre--;
    if(chronometre == 0) 
    {
        fin();
        chronometre = 0;
    }
    else {	
        document.getElementById("chrono").innerHTML = chronometre + " secondes restantes";
    }	
}




