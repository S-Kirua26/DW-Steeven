<?php
$erreur =false;
// var_dump($_POST);
$p = new Categories2($_POST);
// var_dump($p);
switch ($_GET['mode']) {
    case "ajoutCategorie":
        {
            CategoriesManager2::add($p);
            break;
        }
    case "modifierCategorie":
        {
            CategoriesManager2::update($p);
            break;
        }
    case "supprimerCategorie":
        {
           $listeProduit= ProduitsManager2::getListByCategorie($p->getIdCategorie());
           /**** Technique informative */
        //    if (count($listeProduit)>0)
        //    {
        //        echo 'Il reste des produits';
        //        $erreur=true;
               
        //    }
        //    else{
        //     CategoriesManager::delete($p);
        //    }

           /**** Technique de suppression en cascade */
            foreach ($listeProduit as $unProduit)
            {
                ProduitsManager2::delete($unProduit);
            }
            CategoriesManager2::delete($p);
            break;
        }
}

if (!$erreur){  // si pas d'erreur
    header("location:index2.php?code=pagePrincipale2");   //redirection directe
}
else{
    header( "refresh:3;url=index2.php?code=pagePrincipale2" );    // on attend 3 secondes avant la redirection
}