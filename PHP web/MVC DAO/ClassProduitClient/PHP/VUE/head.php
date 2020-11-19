<!DOCTYPE html>
<html>
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists("Php/Controller/" . $classe . ".class.php"))
    {
        require "Php/Controller/" . $classe . ".class.php";
    }
    else if (file_exists("../Controller/" . $classe . ".class.php"))
    {
        require "../Controller/" . $classe . ".class.php";
    }

    if (file_exists("Php/Model/" . $classe . ".class.php"))
    {
        require "Php/Model/" . $classe . ".class.php";
    }

    else if (file_exists("../Model/" . $classe . ".class.php"))
    {
        require "../Model/" . $classe . ".class.php";
    }
}
spl_autoload_register("chargerClasse");

DbConnect::init();

echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- if (file_exists("./CSS/style.css"))
    {
        echo <link rel="stylesheet" href="./CSS/style.css">
    }

    else if (file_exists("../Model/" . $classe . ".class.php"))
    {
        echo <link rel="stylesheet" href="../../CSS/style.css">
    } -->
<link rel="stylesheet" href="CSS/style.css">
</head>