var amp = document.getElementById("ampoule");
amp.addEventListener("click", function () {
    if(amp.getAttribute("src")== "AmpouleHS.gif")
    {
        amp.src="AmpouleOK.gif";
    }
    else{
        amp.src="AmpouleHS.gif";
    }
})