<?php

if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getRoleUtilisateur() == 1)
{
    echo '<h1>Je suis administrateur qui fait des tests</h1>
    <h1>Et je vais me deconnecter</h1>
    <a href="index.php?page=TraitementDeconnection">Se deconnecter</a>';
    
}
else
{
    header("url=index.php?page=FormulaireConnexions");
}