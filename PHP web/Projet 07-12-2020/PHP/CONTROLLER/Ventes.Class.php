<?php

class Ventes
{

	/*****************Attributs***************** */

	private $_idVente;
	private $_idRepres;
	private $_idProduit;
	private $_idClient;
    private $_quantite;

	/***************** Accesseurs ***************** */


	public function getIdVente()
	{
		return $this->_idVente;
	}

	public function setIdVente(int $idVente)
	{
		$this->_idVente=$idVente;
	}

	public function getIdRepres()
	{
		return $this->_idRepres;
	}

	public function setIdRepres($idRepres)
	{
		$this->_idRepres=$idRepres;
	}

	public function getIdProduit()
	{
		return $this->_idProduit;
	}

	public function setIdProduit(int $idProduit)
	{
		$this->_idProduit=$idProduit;
    }

	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		$this->_idClient=$idClient;
	}

    public function getQuantite()
	{
		return $this->_quantite;
	}

	public function setQuantite(int $quantite)
	{
		$this->_quantite=$quantite;
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
		return "IdVente : ".$this->getIdVente()."IdRepresentant : ".$this->getIdRepres()."IdProduit : ".$this->getIdProduit()."IdClient : ".$this->getIdClient()."Quantite: ".$this->getQuantite()."\n";
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