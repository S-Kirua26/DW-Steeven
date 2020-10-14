<?php

class Auteur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
    private $_dateDeDécès;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function getDateDeDécès()
    {
        return $this->_dateDeDécès;
    }

    public function setDateDeDécès(DateTime $dateDeDécès)
    {
        $this->_dateDeDécès = $dateDeDécès;
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
    public function toStringAuteur() // on affiche à l'utilisateur les données
    {
        return "Le nom de l'auteur est: ".$this->getNom()."\nLe prénom de l'auteur est: ".$this->getPrenom()."\nLa date de naissance de l'auteur est: ".$this->getDateDeNaissance()->format('d M Y').
        "\nLa date de décès de l'auteur est: ".$this->getDateDeDécès()->format('d M Y')."\nL'auteur est t-il toujours en vie? ".$this->estVivant()."\n\n";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($auteur) // on vérifie si toutes les données d'un objet créé est semblable à un autre
    {
        if($auteur == $this->getNom() && $auteur == $this->getPrenom() && $auteur == $this->getDateDeNaissance() && $auteur == $this->getDateDeDécès())
        {
            return true;
        }
        else
        {
            return false;
        }
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

    public function estVivant() // on regarde si l'auteur est toujours en vie ou non
    {
        if($this->getDateDeDécès() == new DateTime('0000-00-00'))
        {
            return "L'auteur est vivant";
        }
        else
        {
            return "L'auteur est décèdé";
        }
    }

}
?>