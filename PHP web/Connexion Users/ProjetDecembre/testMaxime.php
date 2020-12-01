<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");
$titre="test";

    include 'PHP/VIEW/head.php';

DbConnect::init();


$tab=EmplacementsManager::getByConvention(1);
foreach($tab as $unEmplacement)
{
    echo $unEmplacement->toString().'<br>';
}
