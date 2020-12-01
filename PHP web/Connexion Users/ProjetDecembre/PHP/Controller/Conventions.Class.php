<?php

class Conventions
{

    /*****************Attributs***************** */
    private $_idConvention;
    private $_nomConvention;
    private $_categorieConvention;
    private $_idSalle;

    /*****************Accesseurs***************** */
    public function getIdConvention()
    {
        return $this->_idConvention;
    }

    public function setIdConvention($idConvention)
    {
        $this->_idConvention = $idConvention;
    }

    public function getNomConvention()
    {
        return $this->_nomConvention;
    }

    public function setNomConvention($nomConvention)
    {
        $this->_nomConvention = $nomConvention;
    }    

    public function getCategorieConvention()
    {
        return $this->_categorieConvention;
    }

    public function setCategorieConvention($categorieConvention)
    {
        $this->_categorieConvention = $categorieConvention;
    }

    public function getIdSalle()
    {
        return $this->_idSalle;
    }

    public function setIdSalle($idSalle)
    {
        $this->_idSalle = $idSalle;
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
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return $this->getNomConvention().' '.$this->getCategorieConvention();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }
    
    

    
}