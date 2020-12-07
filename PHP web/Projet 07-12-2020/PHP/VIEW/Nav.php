<nav>
    
<?php
    if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
    {
        echo '<div><a class="centre size" href="index.php?page=ListeUsers">';?><?php echo texte("btnusernav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeRoles">';?><?php echo texte("btnrolenav");?><?php echo'</a></div>';

    }
    echo '<div><a class="centre size" href="index.php?page=ListeProduits">';?><?php echo texte("btnproduitnav");?><?php echo'</a></div>';
  
    if (!isset($_SESSION["user"]))
    {
        echo '<div><a class="centre size" href="index.php?page=FormulaireConnexion">';?><?php echo texte("btnconnectnav");?><?php echo'</a></div>';
    }


    if (isset($_SESSION["user"]))
    {
        echo '<div><a class="centre size" href="index.php?page=ListeLieuxdeStockages">';?><?php echo texte("btnstocknav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeCategories">';?><?php echo texte("btncatnav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ListeCommandes">';?><?php echo texte("btncommandenav");?><?php echo' </a></div>
        <div><a class="centre size" href="index.php?page=FormulaireInscription">';?><?php echo texte("btninscnav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=ActionDeconnexion">';?><?php echo texte("btndeconnectnav");?><?php echo'</a></div>';
    }

    ?>
</nav>