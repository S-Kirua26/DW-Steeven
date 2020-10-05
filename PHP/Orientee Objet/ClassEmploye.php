<?php

class Employe
{
    private $_nom;
    private $_prenom;
    private $_datembauche;
    private $_fonction;
    private $_salaire;
    private $_service;

    // on initialise les assesseurs guetteurs
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getDatembauche()
    {
        return $this->_datembauche;
    }
    public function getFonction()
    {
        return $this->_fonction;
    }
    public function getSalaire()
    {
        return $this->_salaire;
    }
    public function getService()
    {
        return $this->_service;
    }
    public function getDate()
    {
        return $this->_date;
    }

    // on initialise les assesseurs setteurs
    public function setNom($nom)
    {
        $this->_nom = ($nom);
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = ($prenom);
    }
    public function setDatembauche($datembauche)
    {
        $this->_datembauche = ($datembauche);
    }
    public function setFonction($fonction)
    {
        $this->_fonction = ($fonction);
    }
    public function setSalaire($salaire)
    {
        $this->_salaire = ($salaire);
    }
    public function setService($service)
    {
        $this->_service = ($service);
    }
    public function setDate(DateTime $date)
    {
        $this->_date = $date;
    }


    public function __construct(array $liste = [])
    {
        if (!empty($liste)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($liste);
        }
    }

    public function hydrate($liste)
    {
        foreach ($liste as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    public function toString()
    {
        $affichage = "Monsieur/Madame ".$this->getNom()." ".$this->getPrenom()." à été embauché en ".$this->getDatembauche().".\nIl/Elle occupe le poste de ".$this->getFonction()." et son salaire annuel est de ".$this->getSalaire()."€.\nIl/Elle se trouve dans le service ".$this->getService()
        .".\nCela fait ".$this->ancienneté($this->_datembauche)." ans qu'il(elle) se trouve dans l'entreprise et sa prime annuel est de ".$this->primeAnnuel($this->_salaire)."€.\nSa prime d'ancienneté s'élève à ".$this->primeAncienneté($this->_salaire,$this->ancienneté($this->_datembauche))."€ \n\n";
        return $affichage;
        
    }

    public function ancienneté()
    {
        // $date = 2020;
        // $ancien = $date - $datembauche;
        // return $ancien;
        $date = new DateTime('now');
        $difference = $date->diff($this->getDatembauche());
    }

    public function primeAnnuel($salaire)
    {
        $primeAnnuel = (5/100) * $salaire;
        return $primeAnnuel;
    }

    public function primeAncienneté($salaire,$ancien)
    {
        $primeAnciennete = (2/100) * $salaire * $ancien;
        return $primeAnciennete;
    }

}

?>