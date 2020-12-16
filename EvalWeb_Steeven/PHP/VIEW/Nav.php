<nav>
    <?php

    if (!isset($_SESSION["utilisateurs"]))
    {
        echo '<div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireConnexions">'.texte("connection").'</a></div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=FormulaireInscriptions">'.texte("inscription").'</a></div>';
    }

    if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==1)
    {
        echo '<div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeClients">'.texte("client").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeVentes">'.texte("vente").'</a></div>
        </div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=ActionDeconnexion">'.texte("deconnection").'</a></div>';
    }

    if (isset($_SESSION["utilisateurs"])&& $_SESSION["utilisateurs"]->getIdRole()==2)
    {
        echo '<div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeClients">'.texte("client").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeProduits">'.texte("produit").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRepresentants">'.texte("representant").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeVentes">'.texte("vente").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeUtilisateurs">'.texte("utilisateur").'</a></div>
        </div>
        <div>
            <div class="libelle marginMini"><a class="centre size" href="index.php?page=ListeRoles">'.texte("role").'</a></div>
        </div>
        <div class="libelle marginMini"><a class="centre size" href="index.php?page=ActionDeconnexion">'.texte("deconnection").'</a></div>';
    }

    ?>
</nav>