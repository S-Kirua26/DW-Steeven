<?php

$titrePage = 'Jeu du Memory';
$titreHeader = 'Memory';
$titreFooter = "C'etait le jeu du memory";

include ( 'head.php' );


echo '<div class="page">';

include ( 'header.php' );

for ($i = 1; $i <9; $i++)
{
    $tableau[]=$i;
    $tableau[]=$i;
} // Comme il y a deux fois la meme image, on initialise deux fois $tableau

    for ( $i = 1; $i<5; $i++ )
    {
        echo '<div class="ligne">';
        echo '<div class="miniEspace"></div>';

        for ($j=1; $j<5; $j++)
        {
            $key = array_rand($tableau);
            $nombre = $tableau[$key];
            array_splice($tableau,$key,1);

            echo '<div class="carre">
                    <img class="recto" src="plage.jpg" alt="image quelconque">
                    <img class="verso" src="'.$nombre.'.jpg" alt="image heureuse">
                </div>';
            echo '<div class = "miniEspace"></div>';
        }
        echo '</div>';
        echo '<div class="espace"></div>'; 
    }
    
include ( 'footer.php' );
echo'</html>';