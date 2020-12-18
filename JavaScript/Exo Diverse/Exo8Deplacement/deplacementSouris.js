
function deplaceSouris(e)
{
    carre.style.top = parseInt(e.clientY) + ecartY + "px";
    carre.style.left = parseInt(e.clientX) + ecartX + "px";
};

var ecartY, ecartX;

var carre = document.getElementById('carre');
var flagMouv = false;

carre.addEventListener("mousedown", (e)=>
{
     ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
     ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    flagMouv = true;
});

document.addEventListener("mousemove", (e) =>
{
    if(flagMouv == true)
    {
        deplaceSouris(e);
    }
});

carre.addEventListener("mouseup", (e) =>
{
    flagMouv = false;
});



