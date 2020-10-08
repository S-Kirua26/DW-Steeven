<?php

class Produit
{

    /*****************Attributs***************** */
    private $_numeroProduit;
    private $_prixHT;
    private $_designation;
    private $_couleur;
    private $_dateValidite;
    private $_categorie;
    private $_lieuStockage;
    private static $compteur;

    /*****************Accesseurs***************** */
    public function getNumeroProduit()
    {
        return $this->_numeroProduit;
    }

    public function setNumeroProduit($numeroProduit)
    {
        $this->_numeroProduit = $numeroProduit;
    }

    public function getPrixHT()
    {
        return $this->_prixHT;
    }

    public function setPrixHT($prixHT)
    {
        $this->_prixHT = $prixHT;
    }

    public function getDesignation()
    {
        return $this->_designation;
    }

    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function getDateValidite()
    {
        return $this->_dateValidite;
    }

    public function setDateValidite($dateValidite)
    {
        $this->_dateValidite = $dateValidite;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getLieuStockage()
    {
        return $this->_lieuStockage;
    }

    public function setLieuStockage($lieuStockage)
    {
        $this->_lieuStockage = $lieuStockage;
    }

    public function getCompteur()
    {
        return $this->compteur;
    }

    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;
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
     * @param [type] obj
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
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

}
?>