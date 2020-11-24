<?php

switch ($_GET["mode"])
{
    case "ajoutStation":
    {
        $station = new Station(["nomStation"=>$_POST["nomStation"],"altitudeStation"=>$_POST["altitudeStation"]]);
        // $station = new Station($_POST);
        StationManager::add($station);
        break;
    }

    case "modifierStation":
    {
        $station = new Station($_POST);
        StationManager::update($station);
        break;
    }

    case "supprimerStation":
    {
        $stationSupprimer = new Station($_POST);
        StationManager::delete($stationSupprimer);
        break;
    }
}

header("Location: index.php?");