<?php

// on demande l'age de l'enfant à l'utilisateur

    $age= readline("Veuillez entrez l'age de votre enfant ");

// selon son âge, on affiche la catégorie auquel il appartient

    switch ($age)
    {
        case $age > 5 and $age < 8:
            echo "Votre enfant est dans la catégorie poussin";
        break;

        case $age < 10 :
            echo "Votre enfant est dans la catégorie pupille";
        break;
        
        case $age < 12:
            echo "Votre enfant est dans la catégorie minime";
        break;
        
        case $age <= 14:
            echo "Votre enfant est dans la catégorie cadet";
        break;

        default ;
            echo "Votre enfant n'est dans aucune catégorie";

    }

?>