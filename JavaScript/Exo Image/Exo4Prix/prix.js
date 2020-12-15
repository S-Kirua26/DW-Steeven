// var quantite = document.getElementsById("quantite1");
// var quantite = document.getElementsById("prixUnitaire1");
// var quantite = document.getElementsById("prixTotal1");
// var quantite = document.getElementsById("quantite2");
// var quantite = document.getElementsById("prixUnitaire2");
// var quantite = document.getElementsById("prixTotal2");
// var quantite = document.getElementsById("prixFinal");

// quantite1.addEventListener("change",calcul);
// prixUnitaire1.addEventListener("change",calcul);
// quantite2.addEventListener("change",calcul);
// prixUnitaire2.addEventListener("change",calcul);

var inputs = addEventListener("change",calcul);

function calcul()
{
    prixTotal1 = quantite1.value * prixUnitaire1.value;
    prixTotal2 = quantite2.value * prixUnitaire2.value;
    prixTotal.value = parseInt(prixTotal.value) + parseInt(prixTotal2.value);
}