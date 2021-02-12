<?php
class UtilisateurManager
{
    public static function add(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,pseudoUtilisateur,mdp,role) VALUES (:nomUtilisateur,:prenomUtilisateur,:pseudoUtilisateur,:mdp,:role)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":role", $obj->getRole());
        $q->execute();
    }

    public static function update(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, pseudoUtilisateur=:pseudoUtilisateur, mdp=:mdp, role=:role WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":id", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function delete(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Utilisateur($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $utilisateurs = [];
        $q = $db->query("SELECT * FROM utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $utilisateurs[] = new Utilisateur($donnees);
            }
        }
        return $utilisateurs;
    }

    public static function get($pseudo)
    {
        $db = DbConnect::getDb();
        $q = $db->query("SELECT * FROM utilisateurs WHERE pseudoUtilisateur = '" . $pseudo . "'");

        if ($q != false) {
            $results = $q->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }

        if ($results != false) {
            return new Utilisateur($results);
        } else {
            return false;
        }
    }
}
