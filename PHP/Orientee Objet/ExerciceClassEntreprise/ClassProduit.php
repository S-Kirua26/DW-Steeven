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
    private static $_compteur;

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
        return $this->_compteur;
    }

    public function setCompteur($compteur)
    {
        $this->_compteur = $compteur;
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