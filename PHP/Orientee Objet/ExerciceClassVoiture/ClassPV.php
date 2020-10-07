<?php

require "ClassP.php";
require "ClassV.php";

$v1 = new Voiture(["marque"=>"Audi","modele"=>"A3","km"=>"20000","couleur"=>"bleu"]);
var_dump($v1);
$pv1 = new Personne("Michel","Pierre","2400",$v1);
echo "la marque de la voiture de michel est ". $pv1->getVoiture()->getMarque();


?>