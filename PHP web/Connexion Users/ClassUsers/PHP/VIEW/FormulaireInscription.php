
<form action="index.php?page=TraitementInscription" method="POST">
    <div>
        <label for="nomUtilisateur">Nom: </label>
        <input type="text"  name="nomUtilisateur" required />
    </div>
    <div>
        <label for="prenomUtilisateur">Prenom: </label>
        <input type="text" name="prenomUtilisateur" required />
    </div>
    <div>
        <label for="motDePasseUtilisateur">Mot De Passe: </label>
        <input type="password" name="motDePasseUtilisateur" required />
    </div>
    <div>
        <label for="confirmationUtilisateur">Confirmation du mot de passe:</label>
        <input type="password" name="confirmationUtilisateur" required />
    </div>
    <div>
        <label for="adresseMailUtilisateur">Adresse mail:</label>
        <input type="text" name="adresseMailUtilisateur" required />
    </div>
    <div>
        <label for="roleUtilisateur">Role (1 admin 2 user):</label>
        <input type="text" name="roleUtilisateur" required />
    </div>
    <div>
        <label for="pseudoUtilisateur">Pseudo:</label>
        <input type="text" name="pseudoUtilisateur" required />
    </div>
    <button type="submit">Valider</button>
</form>
