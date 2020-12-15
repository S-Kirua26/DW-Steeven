<?php

$utilisateur=UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
if ($utilisateur != false)
{
    if (crypte($_POST['motDePasseUtilisateur']) == $utilisateur->getMotDePasseUtilisateur())
    {
        echo 'connection reussie';
        $_SESSION['utilisateurs']=$utilisateur;
        header("Location:index.php?page=Accueil");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?page=FormulaireConnexions");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?page=FormulaireConnexions");
}