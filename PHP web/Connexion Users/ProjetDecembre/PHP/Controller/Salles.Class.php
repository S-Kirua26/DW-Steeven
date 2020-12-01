<?php
class Salles
{
    private $_idSalle;
    private $_nomSalle;
    private $_adresseSalle;
    private $_villeSalle;


    public function getIdSalle()
    {
        return $this->_idSalle;
    }
    public function setIdSalle($idSalle)
    {
        return $this->_idSalle = $idSalle;
    }
    public function getNomSalle()
    {
        return $this->_nomSalle;
    }
    public function setNomSalle($nomSalle)
    {
        return $this->_nomSalle = $nomSalle;
    }
    public function getAdresseSalle()
    {
        return $this->_adresseSalle;
    }
    public function setAdresseSalle($adresseSalle)
    {
        return $this->_adresseSalle = $adresseSalle;
    }
    public function getVilleSalle()
    {
        return $this->_villeSalle;
    }
    public function setVilleSalle($villeSalle)
    {
        return $this->_villeSalle = $villeSalle;
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
        return $this->getNomSalle().' : '.$this->getAdresseSalle().' € périme le ' .$this->getVilleSalle(); 
    }
}