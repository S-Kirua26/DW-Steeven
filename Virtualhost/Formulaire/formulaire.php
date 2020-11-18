<?php

include ("head.php");
include ("header.php");


echo '<form class="center colonne"action="resultat.php" method="post">
    <div class="informations center marginTop">
        <label class="center">Votre pseudo:&nbsp<input type="text" placeholder="Entrez votre pseudo"></label>
    </div>
    <div class="informations center marginTop">
        <label class="center">Votre mot de passe:&nbsp<input type="password" placeholder="Entrez votre mot de passe"></label>
    </div>';

     echo '<button class="marginTop" type="submit">Envoyer</button>';
echo '</form>';

include ("footer.php");
echo '</html>';
