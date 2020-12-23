// mise en page des cartes
// mettre une image pour chaque carte (en double)
// faire une fonction aleatoire
// faire une fonction qui permet de retourner deux cartes
// verifier qu'elles sont identiques ou non

function retourner(choix, e, verso) {
    if (choix == true) {
        verso.style.display = "flex";
        e.target.style.display = "none";
        verif.push(verso.getAttribute("src"));
    } else {
        instantRecto[0].style.display = "flex";
        instantRecto[1].style.display = "flex";
        instantVerso[0].style.display = "none";
        instantVerso[1].style.display = "none";

        verif = [];
        instantRecto = [];
        instantVerso = [];
    }
}

var recto = document.getElementsByClassName("recto");
var verso = document.getElementsByClassName("verso");
var verif = [];
var instantVerso = [];
var instantRecto = [];
var choix = true;

for (let i in elt) {
    recto[i].addEventListener("click", function(e) {
        verso = e.target.parentNode.getElementsByClassName("verso");
        instantVerso.push("verso");
        instantRecto.push("e.target");

        if (verif.length < 2) {
            retourner(true, e, verso);
        }
        if (verif.length == 2) {
            if (verif[0] == verif[1]) {
                verif = [];
                instantRecto = [];
                instantVerso = [];
            } else {
                var time = setTimeout(retourne, 2000, false, e, verso);
            }
        }
    })
}