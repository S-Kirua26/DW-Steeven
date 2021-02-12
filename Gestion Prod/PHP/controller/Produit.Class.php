<?php
class Produit
{
/*******************************Attributs*******************************/
private $_idProduit;
private $_nomProduit;
private $_type;
private $_idLot;
private $_dateHeure;
private $_reference;
private $_idProduction;
private $_idReference;

/******************************Accesseurs*******************************/
public function getIdProduit()
{
 return $this->_idProduit;
}
public function setIdProduit($_idProduit)
{
 return $this->_idProduit = $_idProduit;
}
public function getNomProduit()
{
 return $this->_nomProduit;
}
public function setNomProduit($_nomProduit)
{
 return $this->_nomProduit = $_nomProduit;
}
public function getType()
{
 return $this->_type;
}
public function setType($_type)
{
 return $this->_type = $_type;
}
public function getIdLot()
{
 return $this->_idLot;
}
public function setIdLot($_idLot)
{
 return $this->_idLot = $_idLot;
}
public function getDateHeure()
{
 return $this->_dateHeure;
}
public function setDateHeure($_dateHeure)
{
 return $this->_dateHeure = $_dateHeure;
}
public function getReference()
{
 return $this->_reference;
}
public function setReference($_reference)
{
 return $this->_reference = $_reference;
}
public function getIdProduction()
{
 return $this->_idProduction;
}
public function setIdProduction($_idProduction)
{
 return $this->_idProduction = $_idProduction;
}
public function getIdReference()
{
 return $this->_idReference;
}
public function setIdReference($_idReference)
{
 return $this->_idReference = $_idReference;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdProduit . $this->getNomProduit . $this->getType . $this->getIdLot . $this->getDateHeure . $this->getReference . $this->getIdProduction . $this->getIdReference ;
}

}