<?php

class Suivis 
{

	/*****************Attributs***************** */

	private $_idSuivi;
	private $_note;
    private $_idMatiere;
    private $_idEleve;

	/***************** Accesseurs ***************** */


	public function getIdSuivi()
	{
		return $this->_idSuivi;
	}

	public function setIdSuivi(int $idSuivi)
	{
		$this->_idSuivi=$idSuivi;
	}

	public function getNote()
	{
		return $this->_note;
	}

	public function setNomEleve($note)
	{
		$this->_note=$note;
	}

	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
    }
    
    public function getIdEleve()
	{
		return $this->_idEleve;
	}

	public function setIdEleve($idEleve)
	{
		$this->_idEleve=$idEleve;
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
		return "IdSuivi : ".$this->getIdSuivi()."Note : ".$this->getNote()."idMatiere : ".$this->getIdMatiere()."idEleve: ".$this->getIdEleve()."\n";
	}
}