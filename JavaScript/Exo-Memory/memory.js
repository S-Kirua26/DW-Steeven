function retourner(choix, e, imageVerso) {

    if (choix == true) {
        imageVerso[0].style.display = "flex";
        e.target.style.display = "none";
        verif.push(imageVerso[0].getAttribute("src"));
    } else {
        instantRecto[0].style.display = "flex";
        instantRecto[1].style.display = "flex";
        instantVerso[0].style.display = "none";
        instantVerso[1].style.display = "none";

        verif = [];
        instantRecto = [];
        instantVerso = [];
    }

    // if (url == "./images/plage.jpg") {
    //     imageRecto.setAttribute("src", "./images/1.jpg");
    // } else if (url == "./images/1.jpg") {
    //     imageRecto.setAttribute("src", "./images/plage.jpg");
    // }

}

var imageRecto = document.getElementsByClassName("recto");
var imageVerso = document.getElementsByClassName("verso");
var verif = [];
var instantVerso = [];
var instantRecto = [];
var choix = true;
// var url = imageRecto.getAttribute("src");

for (let i = 0; i < imageRecto.length; i++) {
    imageRecto[i].addEventListener("click", function(e) {
        imageVerso = e.target.parentNode.getElementsByClassName("verso");
        instantVerso.push("verso");
        instantRecto.push("e.target");

        if (verif.length < 2) {
            retourner(true, e, imageVerso);
        }
        if (verif.length == 2) {
            if (verif[0] == verif[1]) {
                verif = [];
                instantRecto = [];
                instantVerso = [];
            } else {
                var time = setTimeout(retourner, 1000, false, e, imageVerso);
            }
        }
    })

}