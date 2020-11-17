<?php

class Clients
{
    // on commence par créer les attributs dont on aura besoin
    private $_idClient;
    private $_nomClient;
    private $_prenomClient;
    private $_enfantClient;

    // on initialise les getteurs
    public function getIdClient()
    {
        return $this->_idClient;
    }
    public function getNomClient()
    {
        return $this->_nomClient;
    }
    public function getPrenomClient()
    {
        return $this->_prenomClient;
    }
    public function getEnfantClient()
    {
        return $this->_enfantClient;
    }

    // on initialise les setteurs
    public function setIdClient($idClient)
    {
        $this->_idClient = $idClient;
    }
    public function setNomClient($nomClient)
    {
        $this->_nomClient = $nomClient;
    }
    public function setPrenomClient($prenomClient)
    {
        $this->_prenomClient = $prenomClient;
    }
    public function setEnfantClient($enfantClient)
    {
        $this->_enfantClient = $enfantClient;
    }

    // on intialise le constructeur
    public function __construct(array $liste = [])
    {
        if (!empty($liste)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($liste);
        }
    }

    public function hydrate($liste)
    {
        foreach ($liste as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    public function toString()
    {
        return $this->getNomClient().' : '.$this->getPrenomClient().'  avec un total de ' .$this->getEnfantClient(). ' enfants'; 
    }
}