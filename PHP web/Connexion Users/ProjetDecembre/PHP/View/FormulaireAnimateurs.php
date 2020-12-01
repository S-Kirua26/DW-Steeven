<?php

$typeFormulaire= $_GET['typeFormulaire'];
if($typeFormulaire=="ajouter")
{
    echo'<form method="POST" action="index.php>?page=traitementAnimateurs&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne">
            <div class="titreColonne centre">
                 Nom de l\'animateur
            </div>
        <input class="libelle" type="text" name="nomAnimateur" placeholder="Nom de l\'animateur"/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Prénom de l\'animateur
        </div>
        <input class="libelle" type="text" name="PrenomAnimateur" placeholder="Prenom de l\'animateur"/>
    </div>
    <div class="colonne">
        <div class="titreColonne centre">
            Titre de l\'animateur
        </div>
        <input class="libelle" type="text" name="TitreAnimateur" placeholder="Titre de l\'animateur"/>
    </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Date de début
                    </div>
                <input class="libelle" type="date" name="DateDebut" placeholder="Date de début"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Date de fin
                    </div>
                <input class="libelle" type="date" name="DateFin" placeholder="Date de fin"/>
            </div>';
            // foreach($listeAnim as $unAnim)
            // {
            //     echo'</div>
            //     <select class="libelle" name="idEmplacement">
            //         <option value="1">test salle 1</option>
            //         <option value="3"> test salle 3</option>
            //     </select>
            // </div>';
            // }
    }
else if($typeFormulaire=="modifier")
    {
        $idRecherche= $_GET['id'];
        $id= EmplacementsManager::findById($idRecherche);
        $listeEmplacement= EmplacementsManager::getList();
        echo'<form method="POST" action="index.php>?page=traitementAnimateurs&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne centre">
                    Nom de l\'animateur
                </div>
                <input class="libelle" type="text" name="nomAnimateur" placeholder="Nom de l\'animateur"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Prénom de l\'animateur
                </div>
                <input class="libelle" type="text" name="PrenomAnimateur" placeholder="Prenom de l\'animateur"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Titre de l\'animateur
                    </div>
                <input class="libelle" type="text" name="TitreAnimateur" placeholder="Titre de l\'animateur"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Date de début
                    </div>
                <input class="libelle" type="date" name="DateDebut" placeholder="Date de début"/>
            </div>
            <div class="colonne">
                <div class="titreColonne centre">
                    Date de fin
                    </div>
                <input class="libelle" type="date" name="DateFin" placeholder="Date de fin"/>
            </div>';
            echo'</div>
            <select class="libelle" name="idEmplacement">';
            
            $idRechercheEmplacement= $_GET['id'];
            $idEmp=EmplacementsManager::findById($idRechercheEmplacement);
            $listeEmplacement=EmplacementsManager::getList();
            foreach($listeEmplacement as $unEmplacement)
            {
                $sel="";
                if($unEmplacement->getIdEmplacement()== $idEmp)
                {
                    $sel= "selected";
                }
                echo'<option value="'.$unEmplacement->getIdEmplacement().'"'.$sel.'">'.$unEmplacement->getIdEmplacement().'';
            }
            echo'</select>
            </div>';
        }
        else if($typeFormulaire=="details")
            {
                $idRecherche= $_GET['id'];
                $id= AnimateursManager::findById($idRecherche);
                
                echo'<form method="POST" action="index.php>?page=traitementAnimateurs&typeTraitement=details">
                <div class="contenu colonne">
                    <div class="colonne">
                        <div class="titreColonne colonne centre marginLight">
                            Nom de l\'animateur
                        </div>
                        <input type="hidden" name="id" value="'.$id->getIdAnimateur().'" disabled/>
                        <input type="text" name="nomAnimateur" value="'.$id->getNomAnimateur().'" disabled/>
                    </div>
                    <div class="colonne">
                        <div class="titreColonne colonne centre marginLight">
                            Prénom de l\'animateur
                        </div>
                        <input class="libelle" type="text" name="PrenomAnimateur" value="'.$id->getPrenomAnimateur().'" disabled/>
                    </div>
                    <div class="colonne">
                        <div class="titreColonne colonne centre marginLight">
                            Titre de l\'animateur
                            </div>
                        <input class="libelle" type="text" name="TitreAnimateur" value="'.$id->getTitreAnimateur().'" disabled/>
                    </div>
                    <div class="colonne">
                        <div class="titreColonne colonne centre marginLight">
                            Date de début
                            </div>
                        <input class="libelle" type="date" name="DateDebut" value="'.$id->getDateDebut().'" disabled/>
                    </div>
                    <div class="colonne">
                        <div class="titreColonne colonne centre marginLight">
                            Date de fin
                            </div>
                        <input class="libelle" type="date" name="DateFin" value="'.$id->getDateFin().'" disabled/>
                    </div>';
                    echo'</div>
                    <select class="libelle" name="idEmplacement">';
                    $idRechercheEmplacement= $_GET['id'];
                    $idEmp = EmplacementsManager::findById($idRechercheEmplacement);
                    $listeEmplacement= EmplacementsManager::getList();
                    foreach($listeEmplacement as $unEmplacement) 
                    {
                        $sel="";
                        if($unEmplacement->getIdEmplacement()==$idEmp)
                        {
                            $sel="selected";
                        }
                        
                    echo'<input class="libelle" type="text" name="idEmplacement" value="'.$unEmplacement->getIdEmplacement($idEmp).'"'.$sel.' disabled/>
                         </div>';
                    }
                    echo'</select>
                    </div>';
            }


           echo' <div class="return marginLight"><a class="centre" href="index.php?page=listeAnimateurs">Retour</a></div>
            <input type="submit" class="ajouter marginLight centre" name="submit" value="ajouter"/>
        </div>
    </form>';
