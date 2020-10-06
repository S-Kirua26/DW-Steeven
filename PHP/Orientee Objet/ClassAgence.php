<?php

class Agence
{

    /*****************Attributs***************** */
    private $_nomAgence;
    private $_adresse;
    private $_codePostal;
    private $_ville;

    /*****************Accesseurs***************** */

    public function getNomAgence()
    {
        return $this->_nomAgence;
    }
    public function getAdresse()
    {
        return $this->_adresse;
    }
    public function getCodePostal()
    {
        return $this->_codePostal;
    }
    public function getVille()
    {
        return $this->_ville;
    }

    public function setNomAgence($nomAgence)
    {
        $this->_nomAgence = $nomAgence;
    }
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }
    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }
    public function setVille($ville)
    {
        $this->_ville = $ville;
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
        $agence = "L'agence se nomme ".$this->getNomAgence()."\nSon adresse est le: ".$this->getAdresse()."\nSon code Postal est le: ".$this->getCodePostal()."\nElle se trouve dans la ville de: ".$this->getVille()."\n\n";
        return $agence;
    }

    public function equalsTo($obj)
    {
        return true;
    }

    public static function compareTo($obj1, $obj2)
    {
        return 0;

    }

    public function restauration($restauration)
    {

    }


}
?>