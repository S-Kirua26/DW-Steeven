<?php
var_dump($_POST);
if ($_POST['motDePasseUtilisateur'] == $_POST['confirmationUtilisateur'])
{
    echo "toto";
    //recherche si le pseudo existe
    $utilisateur = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
    if ($utilisateur == false)
    {
        $u = new Utilisateurs($_POST);
        //encodage du mot de passe
        $u->setMotDePasseUtilisateur(md5($u->getMotDePasseUtilisateur()));
        UtilisateursManager::add($u);
    }
    else
    {
        echo "le pseudo existe deja";
    }
}
else
{
    echo "la confirmation ne correspond pas au mot de passe";
}