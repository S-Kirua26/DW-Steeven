<?php

class Agence
{

    /*****************Attributs***************** */
    private $_nomAgence;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_restauration;

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
    public function getRestauration()
    {
        return $this->_restauration;
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
    public function setRestauration($restauration)
    {
        $this->_restauration = $restauration;
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
 
    public function toString2()
    {
        $agence = "l'agence qui se nomme ".$this->getNomAgence()."\nSon adresse est le ".$this->getAdresse()."\nSon code Postal est le ".$this->getCodePostal()."\nElle se trouve dans la ville de ".$this->getVille().
        "\nL'agence dispose-t-elle d'une restauration? : ".$this->getRestauration()."\n";
        return $agence;
    }

}
?>