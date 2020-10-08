<?php

class Cercle
{

    /*****************Attributs***************** */
    private $_diametre;

    /*****************Accesseurs***************** */

    public function getDiametre()
    {
        return $this->_diametre;
    }

    public function setDiametre($diametre)
    {
        $this->_diametre = $diametre;
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
        $cercle = "********** CERCLE ********** \nDiametreCercle: ".$this->getDiametre()."\nPerimetreCercle: ".$this->perimetreCercle()."\nAireCercle: ".$this->aireCercle()."\n";
        return $cercle;
    }

    public function perimetreCercle()
    {
        return $this->getDiametre() * pi();
    }

    public function aireCercle()
    {
        return (pi() * ($this->getDiametre() * $this->getDiametre()) / 4);
    }


}
?>