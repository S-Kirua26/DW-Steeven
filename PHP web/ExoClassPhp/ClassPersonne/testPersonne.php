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

/////////////////////////////////////////////////////// Requete simple ///////////////////////////////////////////////////////////////////
$requete = $database->query("SELECT idPersonne, nomPersonne, prenom, age FROM personne where idPersonne=1");
$reponse = $requete->fetch(PDO::FETCH_ASSOC);
$personne = new Personne($reponse);
$personne->affichage();

echo 'nom de la personne :'.$personne->getNomPersonne().'<br>';
echo 'prenom de la personne :'.$personne->getPrenom().'<br>';
echo 'age de la personne :'.$personne->getAge().'<br>';

////////////////////////////////////////////////// requete avec resultat multiple ///////////////////////////////////////////////////////
// $requete = $database->query("SELECT idPersonne, nomPersonne, prenom, age FROM personne");
// while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)){
//     var_dump($donnees);
//     $personnes[] = new Personne($donnees);
// }

// requete d'ajout simple //
// $ajout = $database->exec('INSERT INTO personne(nomPersonne, prenom, age) VALUES("Roronoa","zoro",20)');
// //$ajout contient le nombre de ligne impactée ou false si la requete a echouée
// var_dump($ajout);

////////////////////////////////////////////////////// requete d'ajout de paramétres //////////////////////////////////////////////////
// $personne = new Personne(["nomPersonne"=>"Monkey D","prenom"=>"luffy","age"=>21]); // on créé un nouvel objet

// //on prepare la requete
// // :nom est une variable SQL
// $ajoutParametre = $database->prepare('INSERT INTO personne(nomPersonne, prenom, age) VALUES(:nomPersonne, :prenom, :age)');

// // Assignation des valeurs pour le nom, le pr�nom.
// $ajoutParametre->bindValue(':nomPersonne', $personne->getNomPersonne());
// $ajoutParametre->bindValue(':prenom', $personne->getPrenom());
// $ajoutParametre->bindValue(':age', $personne->getAge());

// // Ex�cution de la requ�te.
// $reponse = $ajoutParametre->execute();
// var_dump($reponse);

/////////////////////////////////////////////////////// requete d'ajout composee //////////////////////////////////////////////////////

// $personne = new Personne(["nomPersonne"=>"Vinsmoke","prenom"=>"sanji","age"=>22]); // création d'objet

// // requetes
// $ajoutComposee = $database->prepare('INSERT INTO personne(nomPersonne, prenom, age) VALUES("'.$personne->getNomPersonne().'","'.$personne->getPrenom().'","'.$personne->getAge().'")');

// // execution requetes
// $reponse = $ajoutComposee->execute();
//  var_dump($reponse);

 ////////////////////////////////////////////////////// requete delete ///////////////////////////////////////////////////////////////

 $reponse = $database->exec('DELETE FROM personne WHERE personne.nomPersonne = "Roronoa"');
 var_dump($reponse);