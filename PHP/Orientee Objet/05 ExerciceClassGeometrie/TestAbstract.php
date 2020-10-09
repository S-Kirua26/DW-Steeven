<?php

abstract class Animal
{

    /*****************Attributs***************** */
    private $_courir;
    private $_nom;

    /*****************Accesseurs***************** */
    public function getCourir()
    {
        return $this->_courir;
    }

    public function setCourir($courir)
    {
        $this->_courir = $courir;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
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

    abstract public function Manger()
    {
        
    }

}
?>