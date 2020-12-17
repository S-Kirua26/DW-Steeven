var quantite1 = document.getElementById("quantite1");
var prixUnitaire1 = document.getElementById("prixUnitaire1");
var prixTotal1 = document.getElementById("prixTotal1");
var quantite2 = document.getElementById("quantite2");
var prixUnitaire2 = document.getElementById("prixUnitaire2");
var prixTotal2 = document.getElementById("prixTotal2");
var prixFinal = document.getElementById("prixFinal");

// quantite1.addEventListener("change",calcul);
// prixUnitaire1.addEventListener("change",calcul);
// quantite2.addEventListener("change",calcul);
// prixUnitaire2.addEventListener("change",calcul);

var inputs = document.getElementsByTagName("input");

for(let i=0;i<inputs.length;i++)
{
    inputs[i].addEventListener("change", calcul);
}

function calcul()
{
    prixTotal1.value = quantite1.value * prixUnitaire1.value;
    prixTotal2.value = quantite2.value * prixUnitaire2.value;
    prixFinal.value = parseInt(prixTotal1.value) + parseInt(prixTotal2.value);
}