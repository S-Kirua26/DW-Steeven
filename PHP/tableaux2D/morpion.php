<?php

$tableau[0] = [0,1,2];
$tableau[1] = [3,4,5];
$tableau[2] = [6,7,8];

echo " _______ _______ _______\n";
for ($i = 0; $i < 3; $i++)
{
    for($j = 0; $j < 3; $j++)
    {
        echo "|___";
        echo $tableau[$i][$j];
        echo "___";
    }
    echo "|";
    echo "\n";
}
?>