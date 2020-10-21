"Ecrivez des requêtes SELECT (A chaquefois ,vous stockerez la requete dans un fichier texte» pour"
a. "Affichez la totalité de la table « client »."
b. "Affichez les noms de tous les clients."
c. "Affichez les différentes dates de commandes sans répétition."
d. "Affichez les clients qui se prénomment « sophie »."
e. "Affichez les numéros des articles et leur quantité commandés par le client1."
f. "Affichez les noms des clients en majuscules-."
g. "Affichez les noms des clients avec la première lettre en majuscule."
h. "Affichez les noms des clients qui ont 5caractères."
i. "Affichez les noms des clients qui commencent par « t » ou qui ont un « l » en troisième position."
j. "Affichez le numéro de client, le numéro de commande, la date de commande et la date de paiement attendue des commandes (=date_cde+15jours)."
k. "Affichez la date et l'heure actuelles."
l. "Affichez l'ancienneté des clients."
m. "Affichez la quantité maximale achetée par un client."
n. "Affichez la quantité totale achetée par le client1."
o. "Affichez la quantité moyenne achetée par le client 2."
p. "Affichez les clients classés par ordre alphabétique de leur nom."
q. "Affichez les articles classés selon leur prix décroissant."
r. "Affichez le nom du client, le prenom du client, le numero de l'article et la quantité commandé."


question a: SELECT * FROM Clients  //// OU SELECT idClient,nomClient,prenomClient,dateEntreeClient FROM clients;////

question b: SELECT nomClient FROM Clients;

question c: SELECT DISTINCT dateCommande FROM commandes;

question d: SELECT nomClient,prenomClient FROM clients WhERE prenomClient = "sophie";

question e: SELECT idArticle,quantiteCommande FROM commandes WHERE idClient = 2;

question f: SELECT UPPER(nomClient) as Nom Client FROM client;

question g: SELECT CONCAT(UPPER(LEFT(nomClient,1)),LOWER(SUBSTRING(nomClient,2))) as NomClient FROM clients;

question h: SELECT nomClient FROM clients WHERE LENGTH(nomClient) = 5; 

question i: SELECT nomClient FROM clients WHERE nomClient LIKE "t%" OR nomClient LIKE "__l%"; 

question j: SELECT idClient,idCommande,dateCommande,DATE_ADD(dateCommande,INTERVAL 15 DAY) as informations FROM commandes; 

question k: SELECT NOW(); 

question l: SELECT DATEDIFF (NOW(),DateEntreeClient)/365 as "Ancien" FROM clients ///// ou SELECT nomClient, FLOOR(DATEDIFF(NOW(),dateEntreeClient)/365) as "ancien" FROM clients;

question m: SELECT MAX(quantiteCommande) as "Quantite max" FROM commandes;

question n: SELECT idClient, SUM(quantiteCommande) as "somme" FROM commandes WHERE idClient = 1;

question o: SELECT idClient, AVG(quantiteCommande) as "moyenne" FROM commandes WHERE idClient = 2;

question p: SELECT nomClient FROM clients ORDER BY nomClient ASC;

question q: SELECT descriptionArticle, prixArticle FROM articles ORDER BY prixArticle DESC;

question r: SELECT clients.nomClient as "Nom du Client", clients.prenomClient as "Prenom du Client", commandes.idArticle as "Numero de l'article", commandes.quantiteCommande as "Quantite article commande" 
FROM commandes INNER JOIN clients ON commandes.idClient = clients.idClient;



