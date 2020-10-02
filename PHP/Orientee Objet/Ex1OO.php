<?php

Class Personne
{
    // on commence par initialiser les attributs
    private $_Nom;
    private $_Prenom;
    private $_Age;

    // ensuite on défini le constructeur
    public function __construct()
    {
        
    }

    // on défini les assesseurs (Getters)
    public function getNom()
    {
        return $this->_Nom;
    }
    public function getPrenom()
    {
        return $this->_Prenom;
    }
    public function getAge()
    {
        return $this->_Age;
    }

    // on défini les assesseurs (Setteurs)
    public function setNom($nom)
    {
        $this->_Nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->_Prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->_Age = $age;
    }
}

$n = new Personne("Maurice");
$n->setNom("Maurice");
echo $n->getNom();


?>