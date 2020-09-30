<?php
$a = 5;
$b= 6;
$c = 63;
$d = $b;
$b = $a;
$a = $c;
$c = $d;

    echo $a."\n";
    echo$b."\n";
    echo$c."\n";
?>


