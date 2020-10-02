<?php

class Personne
{
    private $_nom;
    private $_prenom; // on déclare 3 attribut _nom, _prenom et _age pour pouvoir identifier la personne plus tard
    private $_age;

    public function __construct($nom, $prenom, $age) // on construit le constructeur de notre fichier
    {
        $this->SetNom($nom);
        $this->SetPrenom($prenom); // Permet de changer les valeurs quand l'utilisateur entrera ses informations
        $this->SetAge($age);
    }

    public function toString()
    {
        $reponse = "Le nom de la personne est ". $this->_nom. ". Le prenom de cette personne est ". $this->_prenom. ". Cette personne à ". $this->_age." ans \n";
        return $reponse;
    }

    public function equalsTo($personne)
    {
        if($this->_nom == $personne->getNom() && $this->_prenom == $personne->getPrenom() && $this->_age == $personne->getAge())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function compareTo($personne)
    {
        if($this->_age > $personne->getAge())
        {
            return 1;
        }
        elseif($this->_age == $personne->getAge())
        {
            return 0;
        }
        else
        {
            return -1;
        }
    }

    public function getNom() // Permet de récupérer les informations de l'utilisateur et de les stockéees
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }

    public function setNom($nom) // Permet de changer les informations de l'utilisateur et de les stockéees
    {
        $this->_nom = strtoupper($nom);
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = strtoupper($prenom);
    }
    public function setAge($age)
    {
        $this->_age = strtoupper($age);
    }

}

$perso = new Personne("Pichon","Bernard","29");
echo $perso->toString();
$perso2 = new Personne("Past","Jean-Jacques","15");
echo $perso2->toString();
$perso3 = new Personne("Pichon","Bernard","29");
echo $perso3->toString();
$perso4 = new Personne("Tristo","Allan","52");
echo $perso4->toString();

echo $perso->compareTo($perso2)."\n";
echo $perso->compareTo($perso3)."\n";
echo $perso->compareTo($perso4)."\n";

echo $perso->equalsTo($perso3);
echo $perso->equalsTo($perso2);

?>
 