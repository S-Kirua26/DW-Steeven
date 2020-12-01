<?php

$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

echo'
<body class="colonne">
    <header>
        <div class="image">
            <img src="./IMG/logo.png" alt="image PGW">
        </div>
        <div class="titre">'.texte("titreConvention").'</div>
        <div class="image">
        </div>
    </header>';