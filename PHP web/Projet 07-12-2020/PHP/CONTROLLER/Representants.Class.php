<?php

class Representants
{

	/*****************Attributs***************** */

	private $_idRepres;
	private $_nomRepres;
	private $_villeRepres;

	/***************** Accesseurs ***************** */


	public function getIdRepres()
	{
		return $this->_idRepres;
	}

	public function setIdRepres(int $idRepres)
	{
		$this->_idRepres=$idRepres;
	}

	public function getNomRepres()
	{
		return $this->_nomRepres;
	}

	public function setNomRepres($nomRepres)
	{
		$this->_nomRepres=$nomRepres;
	}

	public function getVilleRepres()
	{
		return $this->_villeRepres;
	}

	public function setVilleRepres($villeRepres)
	{
		$this->_villeRepres=$villeRepres;
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
		return "IdRepres : ".$this->getIdRepres()."NomRepres : ".$this->getNomRepres()."VilleRepres : ".$this->getVilleRepres()."\n";
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