<?php

$typeFormulaire=$_GET["typeFormulaire"];
if ($typeFormulaire=="ajouter")
{
    echo '<form method="POST" action="index.php?page=traitementSalles&typeTraitement=ajouter">
    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Nom de la Salle
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle " type="text" name="nomSalle" placeholder="Nom de la Salle"/>
                <div class="espace"></div>
                </div>
        </div>
        
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Adresse de la Salle
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="adresseSalle" placeholder="Adresse de la Salle"/>
                <div class="espace"></div>
            </div>
        </div>
        
        <div class="colonne marginLight">
            <div class="titreColonne centre">
                Ville de la Salle
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="villeSalle" placeholder="Ville de la Salle"/>
                <div class="espace"></div>
                </div>
            </div>
        <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeSalles">Retour</a></div>
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
    $id=SallesManager::findById($idRecherche);
    echo '
    <form method="POST" action="index.php?page=traitementSalles&typeTraitement=modifier">
        <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom de la Salle
                    <input type="hidden" name="id" value="'.$id->getIdSalle().'"/>
                    <input type="text" class="libelle" name="nomSalle" value="'.$id->getNomSalle().'"/>
                    
                </div>
            </div>
            
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Adresse de la Salle
                    <input type="text" class="libelle" name="adresseSalle" value="'.$id->getAdresseSalle().'"/>
                </div>
            </div>
            
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Ville de la Salle
                    <input type="text" class="libelle" name="villeSalle" value="'.$id->getVilleSalle().'"/>
                </div>
            </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeSalles">Retour</a></div>
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
    $id=SallesManager::findById($idRecherche);
    echo' <div class="contenu colonne">
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Nom de la Salle
                    <input type="text" class="libelle" name="nomSalle" value="'.$id->getNomSalle().'"disabled/>
                </div>
            </div>
            
            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Adresse de la Salle
                    <input type="text" class="libelle" name="adresseSalle" value="'.$id->getAdresseSalle().'"disabled/>
                </div>
            </div>

            <div class="colonne">
                <div class="titreColonne colonne centre marginLight">
                    Ville de la Salle
                    <input type="text" class="libelle" name="villeSalle" value="'.$id->getVilleSalle().'" disabled/>
                </div>
            </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeSalles">Retour</a></div>
            <div class="espace"></div>
        </div>';
}