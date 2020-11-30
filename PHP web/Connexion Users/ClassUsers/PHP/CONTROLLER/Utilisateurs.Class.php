<?php
class Utilisateurs
{
    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_motDePasseUtilisateur;
    private $_adresseMailUtilisateur;
    private $_roleUtilisateur;
    private $_pseudoUtilisateur;

    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }
    public function setIdUtilisateur($idUtilisateur)
    {
        return $this->_idUtilisateur = $idUtilisateur;
    }
    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }
    public function setNomUtilisateur($nomUtilisateur)
    {
        return $this->_nomUtilisateur = $nomUtilisateur;
    }
    public function getPrenomUtilisateur()
    {
        return $this->_prenomUtilisateur;
    }
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        return $this->_prenomUtilisateur = $prenomUtilisateur;
    }
    public function getMotDePasseUtilisateur()
    {
        return $this->_motDePasseUtilisateur;
    }
    public function setMotDePasseUtilisateur($motDePasseUtilisateur)
    {
        return $this->_motDePasseUtilisateur = $motDePasseUtilisateur;
    }

    public function getAdresseMailUtilisateur()
    {
        return $this->_adresseMailUtilisateur;
    }

    public function setAdresseMailUtilisateur($adresseMailUtilisateur)
    {
        $this->_adresseMailUtilisateur = $adresseMailUtilisateur;
    }

    public function getRoleUtilisateur()
    {
        return $this->_roleUtilisateur;
    }

    public function setRoleUtilisateur($roleUtilisateur)
    {
        $this->_roleUtilisateur = $roleUtilisateur;
    }

    public function getPseudoUtilisateur()
    {
        return $this->_pseudoUtilisateur;
    }

    public function setPseudoUtilisateur($pseudoUtilisateur)
    {
        $this->_pseudoUtilisateur = $pseudoUtilisateur;
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
        return $this->getNomUtilisateur().' : '.$this->getPrenomUtilisateur().'  ' .$this->getMotDePasseUtilisateur().'  ' .$this->getAdresseMailUtilisateur()
        .'  ' .$this->getRoleUtilisateur().'  ' .$this->getPseudoUtilisateur(); 
    }

    
}