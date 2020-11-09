<?php

$titrePage = 'Jeu du Memory';
$titreHeader = 'Memory';
$titreFooter = "C'etait le jeu du memory";

include ( 'head.php' );
include ( 'header.php' );

echo '<div class="contenu">';

    for ( $i = 1; $i<5; $i++ )
    {
        echo '<div class="ligne">';
            echo '<div class="espace"></div>';

            for ( $j = 1; $j<5; $j++ )
            {
                echo '<img class="photo" src="'.$i.'.jpg" alt="image de jeu>';
            }
            echo '<div class="espace"></div>';
        echo '</div>';
    }

echo '<div>';

include ( 'footer.php' );

echo'</html>';