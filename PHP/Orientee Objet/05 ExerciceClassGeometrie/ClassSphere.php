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
        $pyramide = "********** SPHERE ".parent::toString()."PerimetreSphere: ".$this->perimetre()."\nVolumeSphere: ".$this->volumeSphere()."\n\n";
        return $pyramide;
    }

    public function volumeSphere()
    {
        return number_format(((pow(parent::getDiametre()/2,3)*pi()*4)/3),2);
    }

    public function perimetre()
    {
        return parent::aire()*4;
    }
}
?>