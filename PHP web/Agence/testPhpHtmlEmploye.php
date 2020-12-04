<?php

require "ClassEmploye.php";

// on initialise 5 objets employé et on ajoute les informations correspondantes.
$employe[0] = new Employe(["nom" => "Pavu", "prenom" => "Paprika", "datembauche" => new DateTime('2014-05-10'), "fonction" => "vendeur", "salaire" => "2200", "service" => "commercial"]);
$employe[1] = new Employe(["nom" => "Pruvost", "prenom" => "Christian", "datembauche" => new DateTime('1984-07-11'), "fonction" => "cariste", "salaire" => "1850", "service" => "transport"]);
$employe[2] = new Employe(["nom" => "Gradis", "prenom" => "Lilian", "datembauche" => new DateTime('2020-03-05'), "fonction" => "développeur", "salaire" => "2500", "service" => "informatique"]);
$employe[3] = new Employe(["nom" => "Poivron", "prenom" => "Alima", "datembauche" => new DateTime('1999-01-23'), "fonction" => "agent immobilier", "salaire" => "2400", "service" => "immobilier"]);
$employe[4] = new Employe(["nom" => "Fernand", "prenom" => "Léa", "datembauche" => new DateTime('2019-03-08'), "fonction" => "vétérinaire", "salaire" => "2250", "service" => "médical"]);

?>
<!-- echo '-->
<!DOCTYPE html> 
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Employe</title>
</head>

<body>
    <div id="contenu>
        <div class="employe">
            Employe1
        </div>
        <div class="employe">
            Employe2
        </div>
        <div class="employe">
            Employe3
        </div>
        <div class="employe">
            Employe4
        </div>
    </div>


</body>

</html>
?>