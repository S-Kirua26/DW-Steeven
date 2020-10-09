<?php

class Pyramide extends Triangle
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
        $pyramide = "********** PYRAMIDE ********** \n".parent::toString()."PerimetrePyramide: ".$this->perimetrePyramide()." cm(cube)\nVolumePyramide: ".$this->volumePyramide()."\n\n";
        return $pyramide;
    }

    public function perimetrePyramide()
    {
        $cote1=sqrt(pow($this->getHauteur(),2)+pow($this->getHaut(),2));
		$cote2=sqrt(pow($this->getBase(),2)+pow($this->getHaut(),2));
		return (parent::perimetre()+$this->getHaut()+$cote1+$cote2);
    }

    public function VolumePyramide()
    {
        return (parent::aire()*$this->getHaut()/3);
    }
}
?>