<?php

if($_POST['motDePasseUtilisateur'] == $_POST['confirmationMotDePasse'])
{
    $utilisateur= UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
    if($utilisateur==false)
    {
        $u= new Utilisateurs($_POST);
        $u->setMotDePasseUtilisateur(crypte($u->getMotDePasseUtilisateur()));
        UtilisateursManager::add($u);
    }
    else
    {
        echo'Le pseudo existe déjà';
    }
}
else
{
    echo'La confirmation ne correspond pas au mot de passe';
}