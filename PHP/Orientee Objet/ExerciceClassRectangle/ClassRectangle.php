<?php

class Rectangle
{
    private $_longueur;
    private $_largeur;

    // on initialise les getteurs
    public function getLargeur()
    {
        return $this->_largeur;
    }
    public function getLongueur()
    {
        return $this->_longueur;
    }

    // on initialise les setteurs
    public function setLargeur($largeur)
    {
        $this->_largeur = $largeur;
    }
    public function setLongueur($longueur)
    {
        $this->_longueur = $longueur;
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

    public function toString()
    {
       $reponse =  "Longueur :" .$this->getLongueur(). " Largeur : " .$this->getLargeur() . " Perimetre : " .$this->perimetre(). " Aire : ".$this->aire();
       $reponse .= $this->estCarre()?" Il s'agit d'un carré":" Il ne s'agit pas d'un carré";
       return $reponse;
      
    }

    public function perimetre()
    {
      return ($this->getLongueur() + $this->getLargeur())*2;
    }

    public function aire()
    {
        return ($this->getLongueur()* $this->getLargeur());
    }
    public function estCarre()
    {
        return ($this->getLongueur() ==  $this->getLargeur());
    }
    public function afficherRectangle()
    {
        echo $this->toString();
    }

}

?>