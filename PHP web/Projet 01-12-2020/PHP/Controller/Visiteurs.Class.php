<?php

class Visiteurs
{

    /*****************Attributs***************** */
    private $_idVisiteur;
    private $_nomVisiteur;
    private $_prenomVisiteur;
    private $_adresseVisiteur;
    private $_codePostalVisiteur;
    private $_villeVisiteur;

    /*****************Accesseurs***************** */
    public function getIdVisiteur()
    {
        return $this->_idVisiteur;
    }

    public function setIdVisiteur($idVisiteur)
    {
        $this->_idVisiteur = $idVisiteur;
    }

    public function getNomVisiteur()
    {
        return $this->_nomVisiteur;
    }

    public function setNomVisiteur($nomVisiteur)
    {
        $this->_nomVisiteur = $nomVisiteur;
    }    

    public function getPrenomVisiteur()
    {
        return $this->_prenomVisiteur;
    }

    public function setPrenomVisiteur($prenomVisiteur)
    {
        $this->_prenomVisiteur = $prenomVisiteur;
    }

    public function getAdresseVisiteur()
    {
        return $this->_adresseVisiteur;
    }

    public function setAdresseVisiteur($adresseVisiteur)
    {
        $this->_adresseVisiteur = $adresseVisiteur;
    }

    public function getCodePostalVisiteur()
    {
        return $this->_codePostalVisiteur;
    }

    public function setCodePostalVisiteur($codePostalVisiteur)
    {
        $this->_codePostalVisiteur = $codePostalVisiteur;
    }

    public function getVilleVisiteur()
    {
        return $this->_villeVisiteur;
    }

    public function setVilleVisiteur($villeVisiteur)
    {
        $this->_villeVisiteur = $villeVisiteur;
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
        return "";
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