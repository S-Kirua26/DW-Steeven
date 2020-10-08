<?php

require "ClassRectangle.php";
require "ClassTriangle.php";
require "ClasseCercle.php";

$rectangle[0] = new Rectangle (["longueur" => 5, "largeur" => 4]);
// echo $rectangle[0] -> toString();
$rectangle[1] = new Rectangle (["longueur" => 3, "largeur" => 5]);
echo $rectangle[1] -> toString();

$triangle[0] = new Triangle (["base" => 6, "hauteur" => 8]);
echo $triangle[0] -> toString();

$cercle[0] = new Cercle (["diametre" => 2]);
echo $cercle[0] -> toString();

?>