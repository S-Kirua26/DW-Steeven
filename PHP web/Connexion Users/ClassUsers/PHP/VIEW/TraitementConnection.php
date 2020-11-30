<?php
$utilisateur = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
if ($utilisateur != false)
{
    if (crypte($_POST['motDePasseUtilisateur']) == $utilisateur->getMotDePasseUtilisateur())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur']=$utilisateur;
        header("refresh:3;url=index.php?page=Admin");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?page=FormulaireConnection");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?page=FormulaireConnection");
}