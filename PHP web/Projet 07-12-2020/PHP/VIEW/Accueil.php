    <div class="white colonne">
    <div class="margin colonne">
        <div class="espace"></div>
        <div class="titre"><?php echo Texte("BONJOUR ET BIENVENUE");?><?php if(isset($_SESSION["user"])) echo $_SESSION["user"]->getNomUser().' '.$_SESSION["user"]->getPrenomUser()  ;?></div>
        <div class="espace"></div>
        <div class="imgaccueil">
            <img src="./IMG/acc.jpg" alt="">
        </div>
    </div>
