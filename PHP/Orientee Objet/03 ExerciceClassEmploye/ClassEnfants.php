<?php

class Enfants
{

    /*****************Attributs***************** */
    private $_ageEnfant;
    private $_nomEnfant;
    private $_prenomEnfant;

    /*****************Accesseurs***************** */

    public function getAgeEnfant()
    {
        return $this->_ageEnfant;
    }
    public function getNomEnfant()
    {
        return $this->_nomEnfant;
    }
    public function getPrenomEnfant()
    {
        return $this->_prenomEnfant;
    }
    public function setAgeEnfant($ageEnfant)
    {
        $this->_ageEnfant = $ageEnfant;
    }
    public function setNomEnfant($nomEnfant)
    {
        $this->_nomEnfant = $nomEnfant;
    }
    public function setPrenomEnfant($prenomEnfant)
    {
        $this->_prenomEnfant = $prenomEnfant;
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
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */

    public function toStringEnfants()
    {
        $enfants = "Votre enfant a: " . $this->getAgeEnfant() .  " an(s) \nLe nom de votre enfant est: " . $this->getNomEnfant(). "\nLe prenom de votre enfant est: " . $this->getPrenomEnfant() ."\n\n";
        return $enfants;
    }

    public function montantChequeNoel()
    {
        $a = $this->getAgeEnfant();
        if ($a > 0 && $a < 11)
        {
            return 20;
        }
        else if ($a < 16)
        {
            return 30;
        }
        else if ($a < 19)
        {
            return 50;
        }
        else
        {
            return 0;
        }
    }

}
