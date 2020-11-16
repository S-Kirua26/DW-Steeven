<?php

include ("ClassPersonne.php");

try {
    $database = new PDO('mysql:host=localhost;dbname=personne;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    if ($e->getCode()==1049)
    {
        echo "La base de données n'est actuellement pas disponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

$requete = $database->query("SELECT idPersonne, nomPersonne, prenom, age FROM personne where idPersonne=1");
$reponse = $requete->fetch(PDO::FETCH_ASSOC);
$personne = new Personne($reponse);
$personne->affichage();

echo 'nom de la personne :'.$personne->getNomPersonne().'<br>';
echo 'prenom de la personne :'.$personne->getPrenom().'<br>';
echo 'age de la personne :'.$personne->getAge().'<br>';