<?php

class Joueur
{

    /*****************Attributs***************** */
    private static $_pointDeVie = 50;
    private $_de;
    private $_monstre;

    /*****************Accesseurs***************** */
    static public function getPointDeVie()
    {
        return self::$_pointDeVie;
    }
    static public function setPointDeVie($pointDeVie)
    {
        self::$_pointDeVie = $pointDeVie;
    }
    public function getDe()
    {
        return $this->_de;
    }
    public function setDe($de)
    {
        $this->_de = $de;
    }
    public function getMonstre()
    {
        return $this->_monstre;
    }

    public function setMonstre($monstre)
    {
        $this->_monstre = $monstre;
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
        return $this->Attaque()."\n";
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

    public function EstVivant()
    {
        return $this->getPointDeVie() <= 0 ? "Dommage, vous êtes mort..." : "Mon héros subis des dégats";
    }

    public function Attaque()
    {
        
    }

    public function SubitDegats($attaqueMonstre)
    {
        $degats = self::$_pointDeVie - $attaqueMonstre;
        return $degats;
    }

}
?>