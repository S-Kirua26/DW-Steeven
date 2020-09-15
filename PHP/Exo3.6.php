<?php
    $age= readline("Veuillez entrez l'age de votre enfant");

    if ($age > 5 and $age <8)
    {
        echo "Votre enfant est dans la catégorie poussin";
    }
    else if ($age > 7 and $age <10)
    {
        echo "Votre enfant est dans la catégorie pupille";
    }
    else if ($age >10 and $age <12)
    {
        echo "Votre enfant est dans la catégorie minime";
    }
    else if ($age > 12)
    {
        echo "Votre enfant est dans la catégorie cadet";
    }
    else
    {
        echo "Il faut que votre enfant ai minimum 6 ans";
    }

?>