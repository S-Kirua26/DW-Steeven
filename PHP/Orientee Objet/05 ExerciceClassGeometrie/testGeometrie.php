<?php

require "ClassRectangle.php";
require "ClassTriangle.php";
require "ClasseCercle.php";
require "ClassPyramide.php";
require "ClassPave.php";
require "ClassSphere.php";

$rectangle[0] = new Rectangle (["longueur" => 10, "largeur" => 5]);
// echo $rectangle[0] -> toString();
$rectangle[1] = new Rectangle (["longueur" => 10, "largeur" => 5]);
echo $rectangle[1] -> toString();

$triangle[0] = new Triangle (["base" => 10, "hauteur" => 5]);
echo $triangle[0] -> toString();

$cercle[0] = new Cercle (["diametre" => 10]);
echo $cercle[0] -> toString();

$pyramide[0] = new Pyramide(["base" => 10, "hauteur" => 5, "haut" => 7]);
echo $pyramide[0] -> toString();

 $pave[0] = new Pave(["longueur" => 10, "largeur" => 5, "hauteur" => 7]);
 echo $pave[0] -> toString();

 $sphere[0] = new Sphere(["diametre" => 6]);
 echo $sphere[0] -> toString();


?>