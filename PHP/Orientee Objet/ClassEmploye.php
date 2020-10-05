<?php

class Employe
{
    private $_nom;
    private $_prenom;
    private $_datembauche;
    private $_fonction;
    private $_salaire;
    private $_service;

    // on initialise les assesseurs guetteurs
    public function getNom()
    {
        return $this->_nom;
    }
    public function getprenom()
    {
        return $this->_prenom;
    }
    public function getDatembauche()
    {
        return $this->_datembauche;
    }
    public function getFonction()
    {
        return $this->_fonction;
    }
    public function getSalaire()
    {
        return $this->_salaire;
    }
    public function getService()
    {
        return $this->_service;
    }

    // on initialise les assesseurs setteurs
    public function setNom($nom)
    {
        $this->_nom = ($nom);
    }
    public function setprenom($prenom)
    {
        $this->_prenom = ($prenom);
    }
    public function setDatembauche($datembauche)
    {
        $this->_datembauche = ($datembauche);
    }
    public function setFonction($fonction)
    {
        $this->_fonction = ($fonction);
    }
    public function setSalaire($salaire)
    {
        $this->_salaire = ($salaire);
    }
    public function setService($service)
    {
        $this->_service = ($service);
    }


    public function __construct(array $liste = [])
    {
        if (!empty($liste)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($liste);
        }
    }

    public function hydrate($liste)
    {
        foreach ($liste as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    public function ancienneté()
    {
        
    }
}

?>