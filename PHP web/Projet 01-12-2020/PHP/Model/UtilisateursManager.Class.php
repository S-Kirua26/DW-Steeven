<?php

class UtilisateursManager
{
    public static function add (Utilisateurs $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare ("INSERT INTO users(nomUtilisateur, prenomUtilisateur, motDePasseUtilisateur, adresseMailUtilisateur, roleUtilisateur, pseudoUtilisateur) VALUES (:nomUtilisateur, :prenomUtilisateur, :motDePasseUtilisateur, :adresseMailUtilisateur, :roleUtilisateur, :pseudoUtilisateur)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":adresseMailUtilisateur", $obj->getAdresseMailUtilisateur());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudoUtilisateur",$obj->getPseudoUtilisateur());
        $test=$q->execute();
        var_dump($test);
    }

    public static function update (Utilisateurs $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE users SET idUtilisateur=:idUtilisateur, nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, motDePasseUtilisateur=:motDePasseUtilisateur, adresseMailUtilisateur=:adresseMailUtilisateur,roleUtilisateur=:roleUtilisateur,pseudoUtilisateur=:pseudoUtilisateur WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":motDePasseUtilisateur", $obj->getMotDePasseUtilisateur());
        $q->bindValue(":adresseMailUtilisateur", $obj->getAdresseMailUtilisateur());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudoUtilisateur",$obj->getPseudoUtilisateur());
        $q->execute();
    }

    public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM users WHERE idUtilisateur=" .$obj->getIdUtilisateur());
    }
    
    public static function findById($id)
    {
        $db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM users WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
    }
    public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
    }
    
    public static function findByPseudo($pseudo)
    {
		$db = DbConnect::getDb();
		var_dump($pseudo);
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM users WHERE pseudoUtilisateur ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }}
        else
        {
            return false;
        }
    }
}