var image = document.getElementById("image");
var url = image.getAttribute("src");

image.addEventListener("click", retourner)

function retourner() {
    url = image.getAttribute("src");

    if (url == "recto.jpg") {
        image.setAttribute("src", "verso.jpg");
    } else if (url == "verso.jpg") {
        image.setAttribute("src", "recto.jpg");
    }
}