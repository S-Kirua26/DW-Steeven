<?php

class Representants
{

	/*****************Attributs***************** */

	private $_idRepresentant;
	private $_nomRepresentant;
	private $_villeRepresentant;

	/***************** Accesseurs ***************** */


	public function getIdRepresentant()
	{
		return $this->_idRepresentant;
	}

	public function setIdRepresentant(int $idRepresentant)
	{
		$this->_idRepresentant=$idRepresentant;
	}

	public function getNomRepresentant()
	{
		return $this->_nomRepresentant;
	}

	public function setNomRepresentant($nomRepresentant)
	{
		$this->_nomRepresentant=$nomRepresentant;
	}

	public function getVilleRepresentant()
	{
		return $this->_villeRepresentant;
	}

	public function setVilleRepresentant($villeRepresentant)
	{
		$this->_villeRepresentant=$villeRepresentant;
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
		return "IdRepresentant : ".$this->getIdRepresentant()."NomRepresentant : ".$this->getNomRepresentant()."VilleRepresentant : ".$this->getVilleRepresentant()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}