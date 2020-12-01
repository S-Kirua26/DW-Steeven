<?php

$typeFormulaire=$_GET["typeFormulaire"];
if ($typeFormulaire=="ajouter")
{
    $listeSalle=SallesManager::getList();
    echo '<form method="POST" action="index.php?page=traitementConventions&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Nom de la convention
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="nomConvention" placeholder="Nom de la convention"/>
                <div class="espace"></div>
                </div>
            </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Catégorie de la convention
            </div>
            <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="categorieConvention" placeholder ="Catégorie de la convention"/>
            <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Nom de la salle
            </div>
            <div>
            <div class="espace"></div>
            <select class="libelle" name="idSalle">';
            
            foreach ($listeSalle as $uneSalle)
            {
                echo '<option value="'.$uneSalle->getIdSalle().'">'.$uneSalle->getNomSalle().'</option>';
            }
            
            echo'</select>
            <div class="espace"></div>
            </div>
        </div>
    </div>
    <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeConventions">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
            <div class="espace"></div>
            </div>
        </div>
</form>
    ';
}
else if($typeFormulaire=="modifier")
{
    $idRecherche=$_GET['id'];
    $id=ConventionsManager::findById($idRecherche);
    $listeSalle=SallesManager::getList();
    echo '
    <form method="POST" action="index.php?page=traitementConventions&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom de la convention
                    <input type="hidden" name="id" value="'.$id->getIdConvention().'"/>
                    <input type="text" class="libelle" name="nomConvention" value="'.$id->getNomConvention().'"/>

                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                Catégorie de la convention
                <input type="text" class="libelle" name="categorieConvention" value="'.$id->getCategorieConvention().'"/>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                Catégorie de la convention
                <select class="libelle" name="idSalle">';
            
            foreach ($listeSalle as $uneSalle)
            {
                $sel="";
                if ($uneSalle->getIdSalle()==$uneSalle->getIdSalle()){
                    $sel="selected";
                }
                echo '<option value="'.$uneSalle->getIdSalle().'"'.$sel.'>'.$uneSalle->getNomSalle().'</option>';
            }
            echo'</select>
            </div>
        </div>
        <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeConventions">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/>
            <div class="espace"></div>
            </div>
        </div>
    </form>
    ';
} else if ($typeFormulaire=="details")
{
    $idRecherche=$_GET['id'];
    $id=ConventionsManager::findById($idRecherche);
    $listeSalle=SallesManager::getList();
    echo '
    <form method="POST" action="index.php?page=traitementConventions&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom de la convention
                    <input type="hidden" name="id" value="'.$id->getIdConvention().'" disabled/>
                    <input type="text" class="libelle" name="nomConvention" value="'.$id->getNomConvention().'" disabled/>

                </div>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                Catégorie de la convention
                <input type="text" class="libelle" name="categorieConvention" value="'.$id->getCategorieConvention().'" disabled/>
            </div>
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                Catégorie de la convention
                <select class="libelle" name="idSalle">';
            
            foreach ($listeSalle as $uneSalle)
            {
                $sel="";
                if ($uneSalle->getIdSalle()==$uneSalle->getIdSalle()){
                    $sel="selected";
                }
                echo '<option value="'.$uneSalle->getIdSalle().'"'.$sel.' disabled>'.$uneSalle->getNomSalle().'</option>';
            }
            echo'</select>
            </div>
        </div>
        <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeConventions">Retour</a></div>
            <div class="espace"></div>
        </div>
    </form>
    ';
}