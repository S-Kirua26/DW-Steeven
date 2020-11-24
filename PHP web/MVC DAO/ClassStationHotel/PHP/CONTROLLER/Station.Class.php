<?php
class Station
{
    private $_idStation;
    private $_nomStation;
    private $_altitudeStation;

    public function getIdStation()
    {
        return $this->_idStation;
    }
    public function setIdStation(int $idStation)
    {
        return $this->_idStation = $idStation;
    }
    public function getNomStation()
    {
        return $this->_nomStation;
    }
    public function setNomStation($nomStation)
    {
        return $this->_nomStation = $nomStation;
    }
    public function getAltitudeStation()
    {
        return $this->_altitudeStation;
    }
    public function setAltitudeStation(int $altitudeStation)
    {
        return $this->_altitudeStation = $altitudeStation;
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
        return $this->getNomStation().' : '.$this->getAltitudeStation(); 
    }
}