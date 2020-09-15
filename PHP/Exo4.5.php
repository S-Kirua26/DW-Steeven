<?php
    $age = readline("Veuillez entrez votre age");
    $sexe = readline ("Veuillez entrez votre sexe (1 pour homme et 0 pour femme)");

  if ($age > 20 and $sexe = 1 )
  {
      echo "Vous devez payer des impôts";
  }
  else if (($age > 17 and $age <36) and $sexe = 0)
  {
      echo "Vous devez payer des impôts";
  }
  else{
      echo "Vous ne payer pas d'impôts";
  }

?>