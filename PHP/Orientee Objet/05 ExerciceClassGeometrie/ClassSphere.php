<?php

class Sphere extends Cercle
{

    /*****************Attributs***************** */

    /*****************Accesseurs***************** */

    
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
        $pyramide = "********** SPHERE ********** \n".parent::toString()."PerimetreSphere: ".$this->perimetreSphere()."\nVolumeSphere: ".$this->volumeSphere()."\n\n";
        return $pyramide;
    }

    public function perimetreSphere()
    {
        return (4 * parent::aireCercle());
    }

    public function VolumeSphere()
    {
        return (pi() * ($this->getDiametre()*3));
    }
}
?>