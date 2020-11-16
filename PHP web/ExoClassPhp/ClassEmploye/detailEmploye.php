<?php

include "head.php";
include "header.php";
include "listePersonne.php";

$idRecherche = $_GET['id'];
foreach ($personnes as $unePersonne)
{
    if ($unePersonne->getId() == $idRecherche)
    {
        echo '<div class="englobe>
            <div class="information">
                <div class="titreInformation">Informations</div>
                <div class="texteInformation colonne">
                    <div class="texte">'.$unePersonne->getDatembauche()->format('Y-m-d').'</div>
                    <div class="texte">'.$unePersonne->getPoste().'</div>
                    <div class="texte">'.$unePersonne->getSalaire().'</div>
                </div>
            </div>
            <div class="information">
                <div class="titreInformation">Agence</div>
                <div class="texteInformation colonne">
                    <div class="texte">'.$unePersonne->getAgence()->getNomAgence().'</div>
                    <div class="texte">'.$unePersonne->getAgence()->getAdresse().'</div>
                    <div class="texte">'.$unePersonne->getAgence()->getCodePostal().'</div>
                    <div class="texte">'.$unePersonne->getAgence()->getRestauration().'</div>
                </div>
            </div>
            <div class="information">
                <div class="titreInformation">Poste</div>
                <div class="texteInformation colonne">
                <div class="texte">'.$unePersonne->getPoste().'</div>
            </div>
            </div>

        </div>';
    }
}