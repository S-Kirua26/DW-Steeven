<?php

$idStation = $_GET["id"];

$sdetail = StationManager::findById($idStation);

echo '<div class="name">
    Le nom de la station est :'.$sdetail->getNomStation().'<br>
</div>
    <div class="name">L\'altitude auquel se trouve cette station est :'.$sdetail->getAltitudeStation().'<br>
</div>';

echo '<button class="bouton5 marginTop"><a href="index.php">Retour a la page principale</a></button>';