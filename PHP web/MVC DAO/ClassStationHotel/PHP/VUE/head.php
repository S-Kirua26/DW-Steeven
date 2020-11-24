<!DOCTYPE html>
<html>
<head>
<?php

echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';

if (file_exists("./CSS/style.css"))
{

echo '<link rel="stylesheet" href="./CSS/style.css">';

}

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Station Hotel </title>


</head>