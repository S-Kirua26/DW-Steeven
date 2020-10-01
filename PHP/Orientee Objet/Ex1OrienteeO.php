<?php

Class Personne
{
    // on commence par initialiser les attributs
    private $_nom;
    private $_prenom;
    private $_age;

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
        $this->_nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->_age = $age;
    }

    $appelle ="Michel";
    
var_dump($a);
$v1=new Voiture();
var_dump($v1);
$v1->setMarque("Audi");
var_dump($v1);
echo $v1->getMarque();
}
?>