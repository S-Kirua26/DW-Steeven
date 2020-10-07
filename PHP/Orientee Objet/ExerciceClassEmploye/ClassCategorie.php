<?php

class Categorie
{

    /*****************Attributs***************** */
    private $_libelle;
    private $_TVA;

    /*****************Accesseurs***************** */

    public function getLibelle()
    {
        return $this->_libelle;
    }
    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }
    public function getTVA()
    {
        return $this->_TVA;
    }
    public function setTVA($TVA)
    {
        $this->_TVA = $TVA;
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
        return "";
    }

}
?>