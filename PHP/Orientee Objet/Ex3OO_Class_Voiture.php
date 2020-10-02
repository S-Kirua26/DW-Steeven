<?php

class Voiture
{
    private $_marque;
    private $_modele;
    private $_km;
    private $_couleur;

    public function __construct()
    {

    }

    public function __toString()
    {
        $reponse = "La voiture est de marque " . $this->_marque . ". Son modele est " . $this->_modele . ". Son nombre de km est de " . $this->_km . ". Sa couleur est " . $this->_couleur . "\n";
    }

    public function equalsTo($voiture)
    {
        if ($this->_marque == $voiture->getMarque() && $this->_modele == $voiture->getModele() && $this->_km == $voiture->getKm() && $this->_couleur == $voiture->getCouleur()) {
            return true;
        } else {
            return false;
        }
    }

    public function compareTo($voiture)
    {
        if ($this->_km > $voiture->getKm()) {
            return 1;
        } elseif ($this->_km == $voiture->getKm()) {
            return 0;
        } else {
            return -1;
        }
    }

    // Assesseurs Getteurs
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getKm()
    {
        return $this->_km;
    }
    public function getCouleur()
    {
        return $this->_couleur;
    }

    // Assesseurs Setteurs
    public function setMarque($marque)
    {
        $this->_marque = strtoupper($marque);
    }
    public function setModele($modele)
    {
        $this->_modele = strtoupper($modele);
    }
    public function setKm($km)
    {
        $this->_km = $km;
    }
    public function setCouleur($couleur)
    {
        $this->_couleur = strtoupper($couleur);
    }
}

$vi = new Voiture("Audi","A3","3500","bleu");
echo $v1->toString();
$v2 = new Personne("Audi","A1","18000","vert");
echo $v2->toString();
$v3 = new Personne("Citroen","C3","21000","rouge");
echo $v3->toString();
$v4= new Personne("Peugeot","308","250000","gris");
echo $v4->toString();

echo $v1->compareTo($v2)."\n";
echo $v1->compareTo($v3)."\n";
echo $v1->compareTo($v4)."\n";

echo $v1->equalsTo($v3);
echo $v1->equalsTo($v2);