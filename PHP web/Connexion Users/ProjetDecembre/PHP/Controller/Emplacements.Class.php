<?php
class Emplacements
{
    private $_idEmplacement;
    private $_numeroEmplacement;
    private $_idSalle;
    private $_idConvention;

    public function getIdEmplacement()
    {
        return $this->_idEmplacement;
    }
    public function setIdEmplacement($idEmplacement)
    {
        $this->_idEmplacement = $idEmplacement;
    }
    public function getNumeroEmplacement()
    {
        return $this->_numeroEmplacement;
    }
    public function setNumeroEmplacement($numeroEmplacement)
    {
         $this->_numeroEmplacement = $numeroEmplacement;
    }
    public function getIdSalle()
    {
        return $this->_idSalle;
    }

    public function setIdSalle($idSalle)
    {
         $this->_idSalle = $idSalle;
    }
    public function getIdConvention()
    {
        return $this->_idConvention;
    }

    public function setIdConvention($idConvention)
    {
         $this->_idConvention = $idConvention;
    }
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }
    public function toString()
    {
        return 
        $this->getIdEmplacement()." ".
        $this->getNumeroEmplacement()." ".
        $this->getIdSalle();
    }


    
}
