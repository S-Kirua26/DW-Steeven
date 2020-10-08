<?php

require "ClassRectangle.php";

$rectangle[0] = new Rectangle (["longueur" => 5, "largeur" => 4]);
echo $rectangle[0] -> toString();
$rectangle[1] = new Rectangle (["longueur" => 3, "largeur" => 5]);
echo $rectangle[1] -> toString();



?>