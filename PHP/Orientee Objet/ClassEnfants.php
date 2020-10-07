<?php

class Enfants
{

    /*****************Attributs***************** */
    private $_dateDeNaissance;
    private $_NombreEnfants;

    /*****************Accesseurs***************** */

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function getNombreEnfants()
    {
        return $this->_nombreEnfants;
    }

    public function setEnfants($nombreEnfants)
    {
        $this->_nombreEnfants = $nombreEnfants;
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
        $enfants = $this->getNombreEnfants() . " La date de naissance de votre enfant est le " . $this->getDateDeNaissance()->format('d M Y') . "\n";
        return $enfants;
    }

    // public function Naissance()
    // {
    //     $dateAct = new DateTime('now'); // on initialise une variable avec la date du jour
    //     $Naissance = new DateTime($this->getDateDeNaissance()); // on récupére l'année d'un date donnée
    // }

}
