<?php
class Produits2
{
    private $_idProduit;
    private $_libelleProduit;
    private $_prix;
    private $_dateDePeremption;

    public function getIdProduit()
    {
        return $this->_idProduit;
    }
    public function setIdProduit(int $idProduit)
    {
        return $this->_idProduit = $idProduit;
    }
    public function getLibelleProduit()
    {
        return $this->_libelleProduit;
    }
    public function setLibelleProduit($libelleProduit)
    {
        return $this->_libelleProduit = $libelleProduit;
    }
    public function getPrix()
    {
        return $this->_prix;
    }
    public function setPrix(int $prix)
    {
        return $this->_prix = $prix;
    }
    public function getDateDePeremption()
    {
        return $this->_dateDePeremption;
    }
    public function setDateDePeremption($dateDePeremption)
    {
        return $this->_dateDePeremption = $dateDePeremption;
    }

    public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }
    public function toString()
    {
        return $this->getLibelleProduit().' : '.$this->getPrix().' € périme le ' .$this->getDateDePeremption(); 
    }
}