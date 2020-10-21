﻿"executer les 2 instructions suivantes sur la base"
ALTER TABLE commandes ADD cde_total int;
UPDATE commandes SET cde_total = quantiteCommande * (select prixArticle from articles where articles.idArticle = commandes.idArticle)

"Affichez le contenu de la table commande. Qu'y a-t-il de changé dans cette table ? Comment le total de la
commande a-t-il été calculé ?" 

"Maintenant, il y a une colonne commande total. quantité de la commande * le prix"

"Ecrire des requêtes SELECT. Vous vérifierez que le résultat de la requête correspond à votre inspection des
tables correspondantes. 
A) Afficher le montant le plus élevé de commande.
B) Afficher le montant moyen des commandes.
C) Afficher le montant le plus bas de commande.
D) Afficher le nombre de commandes qui ont été passées.
E) Afficher le montant moyen de commande par client.
F) Afficher le montant le plus élevé de commande par client.
G) Afficher le nombre de commandes par client.
H) Afficher le nombre d'articles commandés en moyenne par client.
I) Afficher le nombre d'articles commandés en moyenne par article.
J) Afficher le nombre total d'articles commandés par article.
K) Afficher le nombre moyen d'articles par client et par date.
L) Afficher le nombre de commandes par jour.
M) Afficher le nombre de clients dans la table.
N) Afficher le nombre de clients différents qui ont passé commande.
O) Afficher le nombre d' articles différents qui ont été commandés.
P) Afficher le nombre de jours différents de commandes."

question A: SELECT idArticle as "articles", MAX(cde_total) as "maximum commande total" FROM commandes;

question A sans cde_total: SELECT clients.nomClient as "Nom du client", clients.prenomClient as "prenom du Client", MAX(quantiteCommande * articles.prixArticle) as "nombre max de commande total" 
                           FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle INNER JOIN clients ON commandes.idClient = clients.idClient;

question B: SELECT idArticle as "articles", floor(AVG(cde_total)) as "Moyenne des articles" FROM commandes;

question B sans cde_total: SELECT clients.nomClient as "Nom du client", clients.prenomClient as "Prenom du Client", ROUND(AVG(quantiteCommande * articles.prixArticle),2) as "Moyenne des articles" 
                           FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle INNER JOIN clients ON commandes.idClient = clients.idClient;

question C: SELECT idArticle as "articles", MIN(cde_total) as " minimum commande total" FROM commandes;

question C sans cde_total: SELECT clients.nomClient as "Nom du Client", clients.prenomClient as "Prenom du Client", MIN(quantiteCommande * articles.prixArticle) as "Minimum de commandes total" 
                           FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle INNER JOIN clients ON commandes.idClient = clients.idClient;

question D: SELECT idArticle as "articles", SUM(quantiteCommande) as "total Commande des clients" FROM commandes; /// SELECT COUNT(*) FROM commandes; ///

question E: SELECT idClient as "numero Client", idArticle as "numero Articles", AVG(cde_total) as "Commande total" FROM commandes GROUP BY idClient;

question E sans cde_total: SELECT clients.nomClient as "Nom du client", clients.prenomClient as "Prenom du Client", AVG(quantiteCommande * articles.prixArticle) as "Commande total" 
                           FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle INNER JOIN clients ON commandes.idClient = clients.idClient GROUP BY commandes.idClient;
         
question F: SELECT idClient, MAX(quantiteCommande * articles.prixArticle) FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle GROUP BY idClient;

question F sans cde_total: SELECT clients.nomClient as "Nom du Client", clients.prenomClient as "Prenom du client", MAX(quantiteCommande * articles.prixArticle) as "Max prix commande client"
			   FROM commandes INNER JOIN articles ON commandes.idArticle = articles.idArticle INNER JOIN clients ON commandes.idClient = clients.idClient GROUP BY commandes.idClient;

question G: SELECT idArticle as "numero Article", COUNT(idCommande) FROM commandes GROUP BY idClient;
            
question H: SELECT idClient as "numero Client", idArticle as "Articles", AVG(quantiteCommande) as "Moyenne des articles par client" FROM commandes GROUP BY idClient;

question I: SELECT idArticle as "Articles", AVG(quantiteCommande) as "Moyenne des articles par client" FROM commandes GROUP BY idArticle;

question J: SELECT idArticle as "Articles", SUM(quantiteCommande) as "Somme des aticles" FROM commandes GROUP BY idArticle;

question K: SELECT idClient as "numero Client", idArticle as "Articles", AVG(quantiteCommande) as "Moyenne des articles" FROM commandes GROUP BY idClient,dateCommande;

question L: SELECT idClient as "numero Client", idArticle as "Articles", COUNT(quantiteCommande) as "Nombre articles pas jour" FROM commandes GROUP BY dateCommande;

question M: SELECT COUNT(idClient) as "nombre de clients" FROM commandes;

question N: SELECT COUNT(DISTINCT(idClient)) as "nombre différent de clients" FROM commandes;

question O: SELECT COUNT(DISTINCT(idArticle)) as "nombre différent d'article" FROM commandes;

question P: SELECT dateCommande as "jour Commande", COUNT(DISTINCT(dateCommande)) as "nombre de jour différent" FROM commandes;



