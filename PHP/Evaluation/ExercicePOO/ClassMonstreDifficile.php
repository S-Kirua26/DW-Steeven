<?php

class MonstreDifficile extends MonstreFacile
{

    /*****************Attributs***************** */
    private static $_nbMonstreDifficile; //Valeur statique comptant le nombre de monstres difficiles vaincus
    private const DEGATSORT = 5; //dégat subit par le héros quand le monstre gagne l'attaque c'est une constante

    /*****************Accesseurs***************** */
    public static function getNbMonstreDifficile()
    {
        return self::$_nbMonstreDifficile;
    }
    // Increment the value of _nombreDifficile
    private static function setNbMonstreDifficile()
    {
        self::$_nbMonstreDifficile ++;
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

    public function attaque(JOUEUR $joueur, $trace)
    {
        if ($trace) {
                echo "C'est un monstre difficile"."\n";
        }

        //On effectue l'attaque du monstre facile
        parent::attaque($joueur, $trace);
        //on applique le sort aux dégats
        $joueur->subitDegats($this->sortMagique($trace),$trace);
    }

    private function sortMagique($trace)
    {
        $valeur = $this->lanceLeDe();
        if ($trace) {
            echo "***              sort magique " . $valeur."\n";
        }

        if ($valeur == 6) {
            return 0;
        }
        return (self::DEGATSORT * $valeur);
    }
    
    public function subitDegats() // on surcharge la methode pour compter les monstres difficiles
    { // cette méthode affecte les dégats au monstre, pour l'instant ça le tue directement
        $this->setEstVivant(false);
        //on incremente le nombre de monstre facile
        self::setNbMonstreDifficile();
    }

}