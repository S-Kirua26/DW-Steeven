<?php

class Joueur
{

    /*****************Attributs***************** */
    private $_pV; //Point de vie du joueur
    private $_nom; //nom du joueur

    /*****************Accesseurs***************** */
    public function getPV()
    {
        return $this->_pV;
    }

    public function setPV($pV)
    {
        $this->_pV = $pV;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
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

    public function estVivant()
    { // cette methode renvoi vrai si le joueur est vivant
        return ($this->getPV() > 0); // il est vivant si ses points de vie sont strictement supérieur à 0
    }

    public function lanceLeDe()
    { //Cette métjode simule le lancer de dé.
        return De::lanceLeDe(); // pour l'instant un simple lancer. Pour ameliorer le jeu, on pourra choisir le meilleur de 3 lancer par exemple
    }

    public function attaque(MonstreFacile $monstre, $trace) //on force le parametre à être un monstre, comme MonstreDifficile herite de monstreFacile, les 2 repondent au critere MonstreFacile

    { //Cette méthode simule l'attaque du joueur sur un monstre et modifie le monstre en consequence (subitdegat)
        //Lancer de dé
        $valjoueur = $this->lanceLeDe();
        $valmonstre = $monstre->lanceLeDe();
        //on affiche les données
        if ($trace) {
            echo $this->getNom() . " attaque : " . $valjoueur . "  le Monstre : " . $valmonstre."\n";
        }

        //Compare les lancés de dé :
        //Si le joueur fait autant ou plus que le monstre, le joueur gagne
        if ($valjoueur >= $valmonstre) {
            $monstre->subitDegats(); //le monstre subit des dégats (dans la version actuelle du jeu, il meurt)
            if ($trace) {
                echo "***              " . $this->getNom() . " gagne "."\n";
            }

        }
    }

    public function subitDegats($degats, $trace)
    { // cette methode reporte les dégats au joueur en fonction du résultat du bouclier
        if (!$this->bouclierFonctionne($trace)) {
            $this->setPV($this->getPV() - $degats);
            if ($trace) {
                echo "***              héros subit des dégats " . $degats . "   reste : " . $this->getPV()."\n";
            }

        }
    }

    private function bouclierFonctionne($trace) /* La methode est private car ne peut etre appelee que depuis la classe*/
    { // cette méthode renvoi vrai si le bouclier fonctionne
        $bouclier = De::lanceLeDe();
        if ($trace) {
            echo "***              bouclier " . $bouclier."\n";
        }

        return ($bouclier <= 2); // on compare le bouclier à 2
    }

}