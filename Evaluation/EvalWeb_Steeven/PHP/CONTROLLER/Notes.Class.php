<?php

class Notes 
{

	/*****************Attributs***************** */

	private $_idNote;
	private $_nomEleve;
    private $_prenomEleve;
    private $_noteObtenue;

	/***************** Accesseurs ***************** */


	public function getIdNote()
	{
		return $this->_idNote;
	}

	public function setIdNote(int $idNote)
	{
		$this->_idNote=$idNote;
	}

	public function getNomEleve()
	{
		return $this->_nomEleve;
	}

	public function setNomEleve($nomEleve)
	{
		$this->_nomEleve=$nomEleve;
	}

	public function getPrenomEleve()
	{
		return $this->_prenomEleve;
	}

	public function setPrenomEleve($prenomEleve)
	{
		$this->_prenomEleve=$prenomEleve;
    }
    
    public function getNoteObtenue()
	{
		return $this->_noteObtenue;
	}

	public function setNoteObtenue($noteObtenue)
	{
		$this->_noteObtenue=$noteObtenue;
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
		return "IdNote : ".$this->getIdNote()."NomEleve : ".$this->getNomEleve()."PrenomEleve : ".$this->getPrenomEleve()."NoteObtenue: ".$this->getNoteObtenue()."\n";
	}
}