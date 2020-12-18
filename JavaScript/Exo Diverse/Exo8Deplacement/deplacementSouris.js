function deplaceSouris(e)
{
    carre.style.top = parseInt(e.clientY) - parseInt(window.getComputedStyle(carre).height) / 2 + "px";
    carre.style.left = parseInt(e.clientX) - parseInt(window.getComputedStyle(carre).width) / 2 + "px";
};

var carre = document.getElementById('carre');
var flagMouv = false;

carre.addEventListener("mousedown", (e)=>
{
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



