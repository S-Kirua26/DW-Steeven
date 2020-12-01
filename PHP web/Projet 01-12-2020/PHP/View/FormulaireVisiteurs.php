<?php

$typeFormulaire=$_GET["typeFormulaire"];
if ($typeFormulaire=="ajouter")
{
    echo '<form method="POST" action="index.php?page=traitementVisiteurs&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Nom du Visiteur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle " type="text" name="nomVisiteur" placeholder="Nom du visiteur"/>
                <div class="espace"></div>
                </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Prénom du visiteur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="prenomVisiteur" placeholder="Prénom du visiteur"/>
                <div class="espace"></div>
                </div>
            </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Adresse du visiteur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="adresseVisiteur" placeholder="Adresse du visiteur"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Code postal du visiteur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="codePostalVisiteur" placeholder="Code postal du visiteur"/>
                <div class="espace"></div>
                </div>
            </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Ville du visiteur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="villeVisiteur" placeholder="Ville du visiteur"/>
                <div class="espace"></div>
                </div>
            </div>
        <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisiteurs">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';
}
else if ($typeFormulaire=="modifier")
{
    $idRecherche=$_GET['id'];
    $id=VisiteursManager::findById($idRecherche);
    echo '
    <form method="POST" action="index.php?page=traitementVisiteurs&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom du visiteur
                    <input type="hidden" name="id" value="'.$id->getIdVisiteur().'"/>
                    <input type="text" class="libelle" name="nomVisiteur" value="'.$id->getNomVisiteur().'"/>
                    
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Prénom du visiteur
                    <input type="text" class="libelle" name="prenomVisiteur" value="'.$id->getPrenomVisiteur().'"/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Adresse du visiteur
                    <input type="text" class="libelle" name="adresseVisiteur" value="'.$id->getAdresseVisiteur().'"/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Code postal du visiteur
                    <input type="text" class="libelle" name="codePostalVisiteur" value="'.$id->getCodePostalVisiteur().'"/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Ville du visiteur
                    <input type="text" class="libelle" name="villeVisiteur" value="'.$id->getVilleVisiteur().'"/>
                </div>
            </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisiteurs">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/>
            <div class="espace"></div>
            </div>
        </div>
        </div>';
} else if ($typeFormulaire=="details")
{
    $idRecherche=$_GET['id'];
    $id=VisiteursManager::findById($idRecherche);
    echo' <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom du visiteur
                    <input type="text" class="libelle" name="nomVisiteur" value="'.$id->getNomVisiteur().'"disabled/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Prénom du visiteur
                    <input type="text" class="libelle" name="prenomVisiteur" value="'.$id->getPrenomVisiteur().'"disabled/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Adresse du visiteur
                    <input type="text" class="libelle" name="adresseVisiteur" value="'.$id->getAdresseVisiteur().'"disabled/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Code postal du visiteur
                    <input type="text" class="libelle" name="codePostalVisiteur" value="'.$id->getCodePostalVisiteur().'"disabled/>
                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Ville du visiteur
                    <input type="text" class="libelle" name="villeVisiteur" value="'.$id->getVilleVisiteur().'" disabled/>
                </div>
            </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisiteurs">Retour</a></div>
            <div class="espace"></div>
        </div>';
}