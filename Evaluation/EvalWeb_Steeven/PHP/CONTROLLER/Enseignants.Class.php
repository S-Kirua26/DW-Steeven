<?php

class Enseignants
{

	/*****************Attributs***************** */

    private $_idEnseignant;
    private $_libelleMatiere;
	private $_nomEnseignant;
    private $_prenomEnseignant;
    private $_pseudoEnseignant;

	/***************** Accesseurs ***************** */


	public function getIdEnseignant()
	{
		return $this->_idEnseignant;
	}

	public function setIdEnseignant(int $idEnseignant)
	{
		$this->_idEnseignant=$idEnseignant;
    }
    
    public function getLibelleMatiere()
	{
		return $this->_libelleMatiere;
	}

	public function setLibelleMatiere($libelleMatiere)
	{
		$this->_ilibelleMatiere=$libelleMatiere;
	}

	public function getNomEnseignant()
	{
		return $this->_nomEnseignant;
	}

	public function setNomEnseignant($nomEnseignant)
	{
		$this->_nomEnseignant=$nomEnseignant;
	}

	public function getPrenomEnseignant()
	{
		return $this->_prenomEnseignant;
	}

	public function setPrenomEnseignant($prenomEnseignant)
	{
		$this->_prenomEnseignant=$prenomEnseignant;
    }
    
    public function getPseudoEnseignant()
	{
		return $this->_pseudoEnseignant;
	}

	public function setPseudoEnseignant($pseudoEnseignant)
	{
		$this->_pseudoEnseignant=$pseudoEnseignant;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdEnseignant : ".$this->getIdEnseignant(). "libelleMatiere : ".$this->getLibelleMatiere(). "NomEnseignant : ".$this->getNomEnseignant()."PrenomEnseignant : ".$this->getPrenomEnseignant()."pseudoEnseignant : ".$this->getPseudoEnseignant()."\n";
	}
}