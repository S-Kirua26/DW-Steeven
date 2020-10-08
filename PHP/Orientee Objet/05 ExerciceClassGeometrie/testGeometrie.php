<?php

require "ClassRectangle.php";
require "ClassTriangle.php";
require "ClasseCercle.php";
require "ClassPyramide.php";
require "ClassPave.php";
require "ClassSphere.php";

$rectangle[0] = new Rectangle (["longueur" => 5, "largeur" => 4]);
// echo $rectangle[0] -> toString();
$rectangle[1] = new Rectangle (["longueur" => 3, "largeur" => 5]);
echo $rectangle[1] -> toString();

$triangle[0] = new Triangle (["base" => 6, "hauteur" => 8]);
echo $triangle[0] -> toString();

$cercle[0] = new Cercle (["diametre" => 4]);
echo $cercle[0] -> toString();

$pyramide[0] = new Pyramide(["base" => 8, "hauteur" => 4]);
echo $pyramide[0] -> toString();

 $pave[0] = new Pave(["longueur" => 4, "largeur" => 3, "hauteur" => 2]);
 echo $pave[0] -> toString();

 $sphere[0] = new Sphere(["diametre" => 4]);
 echo $sphere[0] -> toString();


?>