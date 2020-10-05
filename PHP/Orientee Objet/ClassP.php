<?php

class Personne
{
    private $_nom;
    private $_prenom; // on déclare 3 attribut _nom, _prenom et _age pour pouvoir identifier la personne plus tard
    private $_age;
    private $_voiture;

    public function __construct($nom, $prenom, $age, $v) // on construit le constructeur de notre fichier
    {
        $this->SetNom($nom);
        $this->SetPrenom($prenom); // Permet de changer les valeurs quand l'utilisateur entrera ses informations
        $this->SetAge($age);
        $this->SetVoiture($v);
    }

    public function toString()
    {
        $reponse = "Le nom de la personne est ". $this->_nom. ". Le prenom de cette personne est ". $this->_prenom. ". Cette personne à ". $this->_age." ans \n";
        return $reponse;
    }

    public function equalsTo(Personne $personne)
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

    public function compareTo(Personne $personne)
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
    public function getVoiture()
    {
        return $this->_voiture;
    }

    public function setNom($nom) // Permet de changer les informations de l'utilisateur et de les stockéees
    {
        $this->_nom = strtoupper($nom);
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }
    public function setAge($age)
    {
        $this->_age = strtoupper($age);
    }
    public function setVoiture(Voiture $v)
    {
        $this->_voiture = $v;
    }

}

?>
 