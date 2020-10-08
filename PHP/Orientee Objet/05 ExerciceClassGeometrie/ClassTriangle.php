<?php

class Triangle
{

    /*****************Attributs***************** */
    private $_base;
    private $_hauteur;

    /*****************Accesseurs***************** */
    public function getBase()
    {
        return $this->_base;
    }

    public function setBase($base)
    {
        $this->_base = $base;
    }

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
        $triangle = "********** TRIANGLE ********** \nBaseTriangle: ".$this->getBase()."\nHauteurTriangle: ".$this->getHauteur()."\nPerimetreTriangle: ".$this->perimetre()."\nAireTriangle: ".$this->aire()."\n\n";
        return $triangle;
    }

    public function coteTriangle()
    {
        $calcul = (($this->getBase() * $this->getBase()) + ($this->getHauteur() * $this->getHauteur()));
        $hypotenuse = sqrt($calcul);
        return $hypotenuse;
    }

    public function perimetre()
    {
        return ($this->getBase() + $this->getHauteur() + $this->coteTriangle());
    }

    public function aire()
    {
        return ($this->getHauteur() * $this->getBase()) / 2;
    }
    
}
?>