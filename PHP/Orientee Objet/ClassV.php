<?php

class Voiture
{
    private $_marque;
    private $_modele;
    private $_km;
    private $_couleur;

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

    public function toString()
    {
        $reponse = "La voiture est de marque " . $this->_marque . ". Son modele est " . $this->_modele . ". Son nombre de km est de " . $this->_km . ". Sa couleur est " . $this->_couleur . "\n";
        return $reponse;
    }

    public function equalsTo($voiture)
    {
        if ($this->_marque == $voiture->getMarque() && $this->_modele == $voiture->getModele() && $this->_km == $voiture->getKm() && $this->_couleur == $voiture->getCouleur()) {
            return true;
        } else {
            return false;
        }
    }

    public function compareTo($voiture)
    {
        if ($this->_km > $voiture->getKm()) {
            return 1;
        } elseif ($this->_km == $voiture->getKm()) {
            return 0;
        } else {
            return -1;
        }
    }

    // Assesseurs Getteurs
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getKm()
    {
        return $this->_km;
    }
    public function getCouleur()
    {
        return $this->_couleur;
    }

    // Assesseurs Setteurs
    public function setMarque($marque)
    {
        $this->_marque = strtoupper($marque);
    }
    public function setModele($modele)
    {
        $this->_modele = strtoupper($modele);
    }
    public function setKm($km)
    {
        $this->_km = $km;
    }
    public function setCouleur($couleur)
    {
        $this->_couleur = strtoupper($couleur);
    }
}

