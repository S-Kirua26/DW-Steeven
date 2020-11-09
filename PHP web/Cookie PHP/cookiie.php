<?php

include ("head.php");

echo '<div class="page">';

include ("header.php");

    echo '<nav>';
        echo '<div class="englobe">';
            echo '<div class="bouton">';
                echo '<div class="menu"> Histoire';
                    echo '<div class="sousMenu">';
                        echo '<div class="sousCategorie">La Hollande</div>';
                        echo '<div class="sousCategorie">Arrivé aux Etats-Unis</div>';
                        echo '<div class="sousCategorie">Nestlé</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="bouton">';
                echo '<div class="menu"> Recettes';
                    echo '<div class="sousMenu">';
                        echo '<div class="sousCategorie">Simple</div>';
                        echo '<div class="sousCategorie">Pour Enfants</div>';
                        echo '<div class="sousCategorie">Quelques variantes</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '<div class="bouton">';
                echo '<div class="menu"> Les produits dérivés';
                    echo '<div class="sousMenu">';
                        echo '<div class="sousCategorie">Glace</div>';
                        echo '<div class="sousCategorie">Gateux</div>';
                        echo '<div class="sousCategorie">Boissons et sirop</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</nav>';

    echo '<div class="contenu">';
        echo '<div class="partie1">';
            echo '<div class="video">';
                echo '<video src="cookiecasse.mp4" autoplay loop muted controls></video>';
            echo '</div>';
            echo '<div class="cookieSemaine">';
                echo '<div class="titreSemaine">';
                    echo '<h3> Le cookie de la semaine </h3>';
                echo '</div>';
            echo '</div>';
            echo '<div class="descriptionSemaine">';
                echo '<div class="ingredients">';
                    echo 'Ingredients : ';
                    echo '<ul>';
                        echo '<li>170g de farine</li>';
                        echo '<li>80g de sucre</li>';
                        echo '<li>80g de beurre</li> ';
                        echo '<li>1 tablette de chocolat blanc</li> ';
                        echo '<li>1 demi sachet de levure chimique</li>'; 
                        echo '<li>1 bouchon d’arôme de vanille</li> ';
                        echo '<li>1 œuf</li> ';
                        echo '<li>1 petite poignée de framboises</li>';
                    echo '</ul>';
                echo '</div>';
                echo '<div class="photoSemaine">';
                    echo '<img src="cookieBlanc.jpg" alt="cookieBlanc">';
                echo '</div>';
            echo '</div>';
            echo '<div class="recette">';
                echo '<br><br>';
                echo '-Mettre le four à chauffer à 180°.<br>';
                echo '-Faire fondre le beurre et l’incorporer au sucre. Rajouter l’œuf et mélanger.<br>';
                echo '-Ajouter l’arôme de vanille ainsi que la levure, puis, petit à petit, verser la farine en remuant avec une cuillère en bois.<br>';
                echo '-Couper le chocolat blanc pour en faire des petites pépites et couper les framboises en 4.<br>';
                echo '-Ajouter les pépites de chocolat blanc dans la pâte.<br>';
                echo '-La pâte va vous sembler bien collante et vous aurez envie de rajouter de la farine.<br>';
                echo '-Vous pouvez le faire, mais n’en abusez pas ! Sinon vos cookies seront moins moelleux et beaucoup plus épais. Donc même si la pâte colle un peu, c’est mieux !<br>';
                echo '-Faire des petits tas de pâte et ajouter dans chaque, 3 ou 4 morceaux de framboises.<br>';
                echo '-Laisser cuire 10min à 180°.';
            echo '</div>';
        echo '</div> ';
    echo '</div>';
    echo '<div class="partie2">';
        echo '<article>';
            echo '<div class="titreArticle">';
                echo '<h3>Histoire du cookie</h3>';
            echo '</div>';
            echo '<div class="texteAside">';
                echo '<div class="texteArticle">';
                   echo 'L’histoire du cookie nous vient des Etats-Unis. Il existe deux versions différente de l’invention du cookie, mais nous pouvons être sûr que son nom est d’origine néerlandaise, « koekje » signifiant « petit gâteau », un terme acheminé en Amérique par les colons Hollandais de la nouvelle Amsterdam il y a fort longtemps.
                    Ansi, nous parlerons de cookie pour faire référence au Chocolate Chip Cookie, qui est tout simplement le cookie que nous, non-anglophones connaissons. Car je le rappelle, Cookie signifie en réalité « petit gâteau ».
                    Un autre fait dont nous pouvons être certain est que le cookie a été accidentellement fabriqué par Ruth Graves Wakefield en 1930. Elle tenait une auberge du nom de Toll House dans le Massachusetts. Cette auberge avait une bonne réputation dans les années 1930 pour les produits qu’elle faisait maison.';
                echo '</div>';
                echo '<aside>';
                    echo 'Les versions divergent, voici celle de Etienne Laurent ...';
                echo '</aside>';
            echo '</div>';
        echo '</article>';
        echo '<article>';
            echo '<div class="titreArticle">';
                echo '<h3>1ere Version</h3>';
            echo '</div>';
            echo '<div class="texteArticle">';
                echo 'Wakefield raconta que pendant une préparation de petits gâteaux au chocolat, il lui manquait du chocolat de pâtisserie, et décida donc de le remplacer par des morceaux mi-durs mi-mous de chocolat Nestlé, en pensant qu’ils fondraient et se mélangeraient à la pâte. 
                Il n’en fut rien et ainsi le Cookie était né. Wakefield vendit la recette à Nestlé en échange d’un approvisionnement à vie de chocolat. Chaque sac de morceaux de chocolat Nestlé vendu en Amérique du Nord a une variante de la recette originale imprimée dessus.
                Durant la 2e Guerre Mondiale, les soldats américains qui étaient présents en Europe partageaient les cookies qu’ils recevaient par paquets. Il fallu peu d’années pour que des centaines écrivent à leur famille pour qu’elle leur envoie ces fameux cookies de Toll House, et Wakefield fut inondée de lettres venant des quatre coins du monde lui demandant sa recette.';
            echo '</div>';
        echo '</article>';
        echo '<article>';
            echo '<div class="titreArticle">';
                echo '<h3>2eme Version</h3>';
            echo '</div>';
            echo '<div class="texteArticle">';
                echo 'Une version alternative venant de George Boucher, qui fut pendant une période le patron de l’auberge Toll House, et de sa fille Carol Cavanagh qui travaillait là vient alors contredire la version de Nestlé, qui affirmait que Wakefield mit les morceaux de chocolat en espérant que ceci fondraient. 
                Carol déclara que le propriétaire, chef accompli et auteur d’un livre de cuisine, en savait assez sur les propriétés du chocolat pour réaliser qu’il ne fonderait pas et se mélangerait à la pâte pendant la cuisson.
                Boucher affirma que ce furent les vibrations causées par un mixeur électrique de l’époque entrain de mélanger une pâte pour faire des « petits gâteaux » qui firent tomber les barres de chocolat Nestlé (situées sur une étagère au-dessus), en les cassant en petits morceaux et en les mélangeant dans la pâte. 
                Il prétend avoir convaincu Wakefield qui voulait jeter la pâte de la garder afin de ne pas avoir dépensé de l’énergie à la préparer pour rien, conduisant à la découverte de la combinaison dont nous connaissons tous le résultat.';
            echo '</div>';
        echo '</article>';
    echo '</div>';

    include ("footer.php");
echo '</div>';

echo '</html>';
