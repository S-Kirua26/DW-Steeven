<?php
class Animateurs
{
    private $_idAnimateur;
    private $_nomAnimateur;
    private $_prenomAnimateur;
    private $_titreAnimateur;
    private $_dateDebut;
    private $_dateFin;
    private $_idEmplacement;

    public function getIdAnimateur()
    {
        return $this->_idAnimateur;
    }
    public function setIdAnimateur($idAnimateur)
    {
        return $this->_idAnimateur = $idAnimateur;
    }
    public function getNomAnimateur()
    {
        return $this->_nomAnimateur;
    }
    public function setNomAnimateur($nomAnimateur)
    {
        return $this->_nomAnimateur = $nomAnimateur;
    }
    public function getPrenomAnimateur()
    {
        return $this->_prenomAnimateur;
    }
    public function setPrenomAnimateur($prenomAnimateur)
    {
        return $this->_prenomAnimateur = $prenomAnimateur;
    }
    public function getTitreAnimateur()
    {
        return $this->_titreAnimateur;
    }
    public function setTitreAnimateur($titreAnimateur)
    {
        return $this->_titreAnimateur = $titreAnimateur;
    }

    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->_dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->_dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->_dateFin = $dateFin;
    }

    public function getIdEmplacement()
    {
        return $this->_idEmplacement;
    }

    public function setIdEmplacement($idEmplacement)
    {
        $this->_idEmplacement = $idEmplacement;
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
        return $this->getNomAnimateur().' : '.$this->getPrenomAnimateur().'  ' .$this->getTitreAnimateur(); 
    }

    
}