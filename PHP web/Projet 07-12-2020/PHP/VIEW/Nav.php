<nav>
    <?php

    if (isset($_SESSION["utilisateur"])&& $_SESSION["utilisateur"]->getIdRole()==2)
    {
        echo '<div class="espace"></div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeUtilisateurs">Utilisateurs</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRoles">Roles</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeProduits">Produits</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRepresentants">Representants</a></div>
        </div>';

    }

    if (isset($_SESSION["utilisateur"]))
    {
        echo '<div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeClients">Clients</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeVentes">Ventes</a></div>
        </div>
        <div class="espaceLight"></div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireInscriptions">Inscription</a></div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireConnexions">Connexion</a></div>
        </div>
        <div class="espaceLight"></div>';
    }

    ?>
</nav>