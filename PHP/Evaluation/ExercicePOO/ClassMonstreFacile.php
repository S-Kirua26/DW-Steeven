<?php

class MonstreFacile
{

    /*****************Attributs***************** */
    private const DEGATS = 10;
    private static $_nbMonstreFacile = 0;
    protected $_estVivant = true;

    /*****************Accesseurs***************** */
    public static function getNbMonstreFacile()
    {
        return self::$_nbMonstreFacile;
    }
    private static function setNbMonstreFacile()
    {
        self::$_nbMonstreFacile ++;
    }
    public function getEstVivant()
    {
        return $this->_estVivant;
    }
    public function setEstVivant($estVivant)
    {
        $this->_estVivant = $estVivant;
        return $this;
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

    public function attaque(Joueur $joueur, $trace)
    {
        $valMonstre = $this->lanceLeDe();
        $valJoueur = $joueur->lanceLeDe();
        if ($trace) {
            echo "Monstre  attaque: " . $valMonstre . "  mon héros : " . $valJoueur."\n";
        }

        if ($valMonstre > $valJoueur) {
            $joueur->subitDegats(self::DEGATS,$trace);
        }
    }

    public function subitDegats()
    { // cette méthode affecte les dégats au monstre, pour l'instant ca le tue directement
        $this->setEstVivant(false);
        //on incremente le nombre de monstre facile
        self::setNbMonstreFacile();
    }

    public function lanceLeDe()
    { //Cette méthode simule le lancer de dé.
        return De::lanceLeDe(); // pour l'instant un simple lancer. Pour ameliorer le jeu, on pourra choisir le meilleur de 3 lancer par exemple
    }

}