<body class="colonne">

<?php $uri = $_SERVER['REQUEST_URI'];
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

?>
    <header>
        <div class="logo">
            <a href="index.php?page=default">
                <img src="./IMG/gestion.png" alt="logo gestion">
            </a>
        </div>
        <div class="titre">Bienvenue sur le site de gestion</div>
        <div class="logo">
            <a href=" <?php echo $uri; ?>lang=FR">
                <img src="./IMG/drapeauFrance.jpg" alt="Drapeau France">
            </a>
        </div>
        <div class="logo">
            <a href="<?php echo $uri; ?>lang=EN">
                <img src="./IMG/drapeauAnglais.jpeg" alt="Drapeau Anglais">
            </a>
        </div>
    </header>