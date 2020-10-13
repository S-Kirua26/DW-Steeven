<?php

class Document
{

    /*****************Attributs***************** */
    private $_auteur;
    private $_titre;
    private $_emprunt;

    /*****************Accesseurs***************** */
    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getEmprunt()
    {
        return $this->_emprunt;
    }

    public function setEmprunt($emprunt)
    {
        $this->_emprunt = $emprunt;
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
    public function toString() // on affiche les informations à l'utilisateur
    {
        return "********** Document **********\nL'auteur du document est: ".$this->getAuteur()."\nLe titre du document est: ".$this->getTitre()."\nCe livre à t'il été emprunté? ".$this->estEmprunte()."\n\n";

    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($document) // on compare si les auteurs sont les mêmes
    {
        if($this->getAuteur() == $document)
        {
            return true; // si oui on renvoie vraie
        }
        else
        {
            return false; // sinon on renvoie faux
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
    
    public function estEmprunte() // on vérifie si le document est emprunté ou non
    {
        return $this->getEmprunt() == "oui" ? "Document emprunté" : "Document non emprunté"; // true ou false
    }

}
?>