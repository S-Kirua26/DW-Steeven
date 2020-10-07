<?php

class Employe
{
    // on commence par créer les attributs dont on aura besoin
    private $_nom;
    private $_prenom;
    private $_datembauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_agence;
    private $_enfants;
    private static $_liste = 0;

    // on initialise les getteurs
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
    public function getAgence()
    {
        return $this->_agence;
    }
    public function getEnfants()
    {
        return $this->_enfants;
    }
    static public function getListe()
    {
        return self::$_liste;
    }


    // on initialise les setteurs
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    public function setDatembauche(DateTime $datembauche)
    {
        $this->_datembauche = $datembauche;
    }
    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }
    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }
    public function setService($service)
    {
        $this->_service = $service;
    }
    public function setAgence($agence)
    {
        $this->_agence = $agence;
    }
    public function setEnfants($enfants)
    {
        $this->_enfants = $enfants;
    }
    static public function setListe($liste)
    {
        self::$_liste = $liste;
    }


    // on intialise le constructeur
    public function __construct(array $liste = [])
    {
        if (!empty($liste)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($liste);
        }

        self::$_liste ++;
    }

    public function hydrate($liste)
    {
        foreach ($liste as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    // on initialise la fonction pour l'affichage
    public function toString()
    {
        $affichage = " ************ Informations sur l'employé ************ \n Monsieur/Madame " . $this->getNom() . " " . $this->getPrenom() . " à été embauché en " . $this->getDatembauche()->format('d M Y')
        . ".\nIl/Elle occupe le poste de " . $this->getFonction() . " et son salaire annuel est de " . $this->getSalaire() . "€.\nIl/Elle se trouve dans le service " . $this->getService()
        . ".\nCela fait " . $this->ancienneté() . " ans qu'il(elle) se trouve dans l'entreprise et sa prime annuel est de " . $this->primeAnnuel() . "€.\nSa prime d'ancienneté s'élève à " . $this->primeAncienneté() . "€. Sa prime total est de ".$this->primeTotal()
        ."€.\nL'employé dispose de ".$this->getEnfants()." enfant(s)\n\n ************ Agence de l'employé ******* \n L'employé est dans ".$this->getAgence()->toStringAgence()."L'employé dispose t-il/t-elle de chèques vacances? ".$this->ChequeVacances()."\n\n";
        return $affichage;

    }

    // fonction permettant de savoir l'ancienneté d'un employé
    public function ancienneté()
    {
        $date = new DateTime('now');
        $ancien = $date->diff($this->getDatembauche());
        return $ancien->format('%Y')*1;
    }

    // fonction permettant de calculer la prime annuel d'un employé
    private function primeAnnuel()
    {
        return $this->getSalaire() * (5/100);
    }

    // fonction permettant de calculer la prime d'ancienneté d'un employé
    private function primeAncienneté()
    {
        return $this->getSalaire() * (2/100) * $this->ancienneté(); // on retourne le montant de la prime annuelle
    }

    // fonction permettant de calculer la prime annuel total d'un employé
    public function primeTotal()
    {
        return $this->primeAnnuel() + $this->primeAncienneté(); // on retourne le montant de la prime annuelle
    }

    // permet de comparer la liste des employés en fonction de leurs noms et prénoms
    public static function compareToNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom())
        {
            return -1;
        }
        else if ($obj1->getNom() > $obj2->getNom())
        {
            return 1;
        }
        else if ($obj1->getPrenom() < $obj2->getPrenom())
        {
            return -1;
        }
        else if ($obj1->getPrenom() > $obj2->getPrenom())
        {
            return 1;
        }

        return 0;
    }

    // permet de comparer la liste des employés en fonction de leurs services, noms et prénoms
    public static function compareToServiceNomPrenom($obj1, $obj2)
    {
        if ($obj1->getService() < $obj2->getService())
        {
            return -1;
        }
        else if ($obj1->getService() > $obj2->getService())
        {
            return 1;
        }
        else
        {
            return self::compareToNomPrenom($obj1, $obj2);
        }

    }

    // permet de calculer la masse salariale total de l'entreprise
    public function masseSalariale()
    {
        return $this->getSalaire() * 12 + $this->primeTotal();
    }

    //permet de savoir si l'employe peut disposer de chèques vacances
    public function ChequeVacances()
    {
        return $this->ancienneté() > 1 ? "oui":"non";
    }

}

