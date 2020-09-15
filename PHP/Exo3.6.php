<?php
    $age= readline("Veuillez entrez l'age de votre enfant ");

    switch ($age)
    {
        case $age < 6 :
            echo "Votre enfant doit avoir au moins 6 ans pour entrer dans une catégorie";
        break;

        case $age < 8:
            echo "Votre enfant est dans la catégorie poussin";
        break;

        case $age < 10 :
            echo "Votre enfant est dans la catégorie pupille";
        break;
        
        case $age <12:
            echo "Votre enfant est dans la catégorie minime";
        break;
        
        case $age >= 12:
            echo "Votre enfant est dans la catégorie cadet";
        break;

    }

?>