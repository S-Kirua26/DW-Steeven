var imageRecto = document.getElementsByClassName("recto");
var imageVerso = document.getElementsByClassName("verso");
// var url = imageRecto.getAttribute("src");

document.addEventListener("click", function(e) {
    retourner(e.target.parentNode.getElementsByClassName("recto")[0])
});

function retourner(imageRecto) {

    url = imageRecto.getAttribute("src");

    // for (let i = 0; i < imageRecto.length; i++) {
    if (url == "./images/plage.jpg") {
        imageRecto.setAttribute("src", "./images/1.jpg");
    } else if (url == "./images/1.jpg") {
        imageRecto.setAttribute("src", "./images/plage.jpg");
    }
    // }
}