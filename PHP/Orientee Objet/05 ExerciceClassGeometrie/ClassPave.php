<?php

class Pave extends Rectangle
{

    /*****************Attributs***************** */

        private $_hauteur;
    /*****************Accesseurs***************** */
    public function getHauteur()
    {
            return $this->_hauteur;
    }

    public function setHauteur($hauteur)
    {
            $this->_hauteur = $hauteur;
    }
    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        parent::__construct($options);
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    public function toString()
    {
        $pyramide = "********** PAVE ********** \n".parent::toString()."PerimetrePave: ".$this->perimetre()."\nVolumePave: ".$this->volumePave()."\n\n";
        return $pyramide;
    }

    public function perimetre()
    {
        return ((2 * $this->getLongueur() * $this->getLargeur() + (2 * $this->getLargeur() * $this->getHauteur() + (2 * $this->getLongueur() * $this->getHauteur()))));
    }

    public function VolumePave()
    {
        return ($this->getLongueur() * $this->getLargeur() * $this->getHauteur());
    }

}
?>