<nav>
    <?php

    if (!isset($_SESSION["utilisateurs"]))
    {
        echo '<div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireConnexions">Connexion</a></div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireInscriptions">Inscription</a></div>';
    }

    if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==1)
    {
        echo '<div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeClients">Clients</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeVentes">Ventes</a></div>
        </div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=ActionDeconnexion">Deconnexion</a></div>';
    }

    if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==2)
    {
        echo '<div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeClients">Clients</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeProduits">Produits</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRepresentants">Representants</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeVentes">Ventes</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeUtilisateurs">Utilisateurs</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRoles">Roles</a></div>
        </div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=ActionDeconnexion">Deconnexion</a></div>';
    }

    ?>
</nav>