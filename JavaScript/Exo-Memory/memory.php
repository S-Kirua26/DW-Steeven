<?php
include "head.php";
echo '<body>
<div class="page">';
/* On prépare le tableau avec les images pour la répartition aléatoire */
for ($i=1;$i<9;$i++)  
{
    $image[]=$i;
    $image[]=$i;
  
}   // $image contient 2 fois les numeros de 1 à 8

for ($lig=1;$lig<5;$lig++)  // on boucle pour faire les lignes
{
    echo '
        <div class="ligne"> 
        <div class="demi"></div>';  // demi permet un espace entre les images

    for ($i=1;$i<5;$i++)        // on boucle sur les images d'une ligne
    {
        //on choisit un numero aléatoirement dans le tableau.
        $key = array_rand($image);
        $num = $image[$key];
        //on enlève la valeur du tableau
        array_splice($image,$key,1);
        echo ' <div class="emplacement paddingLight">
            <img class="recto" src="./images/plage.jpg" alt="">
            <img class="verso" src="./images/'.$num.'.jpg" alt="">
        </div>
        <div class="demi"></div>';
    }
    echo '  </div>';
}
echo '<script src="memory.js"></script>
</body>
</html>';