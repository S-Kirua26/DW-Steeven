<?php

$typeFormulaire = $_GET["typeFormulaire"];

if ($typeFormulaire == "ajouter")
 {
    $listeVisiteurs=VisiteursManager::getList();
    $listeConventions=ConventionsManager::getList();

    echo '<form method="POST" action="index.php?page=traitementVisite&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de la visite
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="date" name="dateVisite" placeholder="Date de la Visite"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Visiteur
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idVisiteur" placeholder="Id Visiteur"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Convention
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idConvention" placeholder="Id Convention"/>
                <div class="espace"></div>
            </div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idVisiteur" disabled>';

            foreach ( $listeVisiteurs as $uneVisite )
            {
                echo '<option value="'.$uneVisite->getIdVisiteur().'"'.$sel.'>'.$uneVisite->getNomVisiteur().' '.$uneVisite->getPrenomVisiteur().'</option>';
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idConvention" disabled>';

            foreach ( $listeConventions as $uneConvention )
            {
                echo '<option value="'.$uneConvention->getIdConvention().'"'.$sel.'>'.$uneConvention->getNomConvention().'</option>';      
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

    echo'</div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
        </div>
</form>';

} 
elseif ( $typeFormulaire == "modifier" )
{
    $idRecherche = $_GET['id'];
    $id = VisiteManager::findById($idRecherche);
    $listeVisiteurs = VisiteursManager::getList();
    $listeConventions = ConventionsManager::getList();

    echo '<form method="POST" action="index.php?page=traitementVisite&typeTraitement=modifier">

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de la visite
            </div>
            <div>
                <div class="espace"></div>
                <input type="hidden" name="id" value="'.$id->getIdVisite().'"/>
                <input class="libelle" type="date" name="dateVisite" value="'.$id->getDateVisite().'"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Visiteur
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idVisiteur" value="'.$id->getIdVisiteur().'"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Convention
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idConvention" value="'.$id->getIdConvention().'"/>
                <div class="espace"></div>
            </div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idVisiteur" disabled>';

            foreach ( $listeVisiteurs as $uneVisite )
            {
                $sel = "";
                if ($uneVisite->getIdVisiteur()== $id->getIdVisiteur())
                {
                    $sel = "selected";
                }
                echo '<option value="'.$uneVisite->getIdVisiteur().'"'.$sel.'>'.$uneVisite->getNomVisiteur().' '.$uneVisite->getPrenomVisiteur().'</option>';
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idConvention" disabled>';

            foreach ( $listeConventions as $uneConvention )
            {
                $sel = "";
                if ($uneVisite->getIdVisiteur()== $id->getIdVisiteur())
                {
                    $sel = "selected";
                }
                echo '<option value="'.$uneConvention->getIdConvention().'"'.$sel.'>'.$uneConvention->getNomConvention().'</option>';      
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

    echo '</div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/>
        </div>
</form>';
}
elseif ( $typeFormulaire == "details" )
{
    $idRecherche = $_GET['id'];
    $id = VisiteManager::findById($idRecherche);
    $listeVisiteurs = VisiteursManager::getList();
    $listeConventions = ConventionsManager::getList();
    echo '<form method="POST" action="index.php>?page=traitementVisite&typeTraitement=details">

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Date de la visite
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="date" name="dateVisite" value="'.$id->getDateVisite().'" disabled/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Visiteur
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idVisiteur" value="'.$id->getIdVisiteur().'" disabled/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Id Convention
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="idConvention" value="'.$id->getIdConvention().'" disabled/>
                <div class="espace"></div>
            </div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idVisiteur" disabled>';

            foreach ( $listeVisiteurs as $uneVisite )
            {
                $sel = "";
                if ($uneVisite->getIdVisiteur()== $id->getIdVisiteur())
                {
                    $sel = "selected";
                }
                echo '<option value="'.$uneVisite->getIdVisiteur().'"'.$sel.'>'.$uneVisite->getNomVisiteur().' '.$uneVisite->getPrenomVisiteur().'</option>';
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

        echo '<div>
        <div class="espace"></div>
            <select class="libelle marginLight" name="idConvention" disabled>';

            foreach ( $listeConventions as $uneConvention )
            {
                $sel = "";
                if ($uneVisite->getIdVisiteur()== $id->getIdVisiteur())
                {
                    $sel = "selected";
                }
                echo '<option value="'.$uneConvention->getIdConvention().'"'.$sel.'>'.$uneConvention->getNomConvention().'</option>';      
            }

            echo '</select>
        <div class="espace"></div>
        </div>';

    echo '</div>
        <div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeVisite">Retour</a></div>
        </div>
</form>';
}

echo '</body>

</html>';
