1)	"Afficher la liste des hôtels. Le résultat doit faire apparaître le nom de l’hôtel et la ville"
    SELECT nomHotel as "Nom de l'Hotel", villeHotel as "Ville de l'Hotel" FROM hotels;

2)	"Afficher la ville de résidence de Mr White .Le résultat doit faire apparaître le nom, le prénom, l'adresse et la ville du client"
    SELECT nomClient as "Nom du client", prenomClient as "Prenom du Client", adresseClient as "Adresse du client", villeClient as "Ville du client"
    FROM clients WHERE nomClient = "WHITE";

3)	"Afficher la liste des stations dont l’altitude < 1000 Le résultat doit faire apparaître le nom de la station et l'altitude"
    SELECT nomStation as "Nom de la Station", altitudeStation as "Altitude de la Station"
    FROM stations WHERE altitudeStation < 1000;

4)	"Afficher la liste des chambres ayant une capacité > 1 Le résultat doit faire apparaître le numéro de la chambre ainsi que la capacité"
    SELECT numChambre as "Numero de la Chambre", capaciteChambre as "Capacite de la Chambre"
    FROM chambres WHERE capaciteChambre > 1;

5)	"Afficher les clients n’habitant pas à Londres Le résultat doit faire apparaître le nom du client et la ville"
    SELECT nomClient "Nom du Client", villeClient as "Ville du client" 
    FROM clients WHERE villeClient NOT IN (SELECT villeClient FROM clients WHERE villeClient = "Londres");

6)	"Afficher la liste des hôtels avec  leur station (Nom de la station, Nom de l’hôtel, Catégorie, Ville)"
    SELECT stations.nomStation as "Nom de la Station", hotels.nomHotel as "Nom de l'Hotel", hotels.categorieHotel as "Catégorie de l'Hotel", hotels.villeHotel as "Ville de l'Hotel" 
    FROM hotels INNER JOIN stations ON hotels.idStation = stations.idStation;

7)	 "Afficher la liste des chambres et leur hôtel Le résultat doit faire apparaître le numéro de la chambre, le nom de l’hôtel, la catégorie, la ville,"
    SELECT chambres.numChambre as "Numero de la Chambre", hotels.nomHotel as "Nom de l'Hotel", hotels.categorieHotel as "Categorie de l'Hotel", hotels.villeHotel as "Ville de l'Hotel"
    FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel;

8)	 "Afficher la liste des réservations avec le nom des clients, le résultat doit faire apparaitre la date de réservation, début et fin de séjour"
    SELECT clients.nomClient as "Nom du Client", reservations.dateReservationSejour as "Date de reservation", reservations.dateDebutSejour as "Date Debut Sejour", reservations.dateFinSejour as "Date Fin Sejour"
    FROM reservations INNER JOIN clients ON reservations.idClient = clients.idClient;

9)	"Afficher la liste des chambres (numéro) avec le nom de l’hôtel et le nom de la station"
        /////////// Avec INNER JOIN ///////////
    SELECT chambres.numChambre as "Numero de la Chambre", hotels.nomHotel as "Nom de l'Hotel", stations.nomStation as "Nom de la Station"
    FROM chambres 
    INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
    INNER JOIN stations ON hotels.idStation = stations.idStation; 

      //////////// Avec LEFT JOIN ////////////
    SELECT chambres.numChambre as "Numero de la Chambre", hotels.nomHotel as "Nom de l'Hotel", stations.nomStation as "Nom de la Station"
    FROM chambres 
    LEFT JOIN hotels ON chambres.idHotel = hotels.idHotel
    LEFT JOIN stations ON hotels.idStation = stations.idStation;

10)	"Afficher la liste des chambres de plus d'une place dans des hôtels situés sur la ville de Bretou (Numéro de chambre, nom de l’hôtel, catégorie de l’hôtel, ville de l’hôtel, capacité de la chambre)"
    "Le résultat doit faire apparaître le nom de l’hôtel, la catégorie, la ville, le numéro de la chambre et sa capacité"
    SELECT chambres.numChambre as "Numero de la Chambre", chambres.capaciteChambre as "Capacite de la Chambre", hotels.nomHotel as "Nom de l'Hotel", hotels.categorieHotel as "Categorie de l'Hotel", hotels.villeHotel as "Ville de l'Hotel"
    FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
    WHERE chambres.capaciteChambre > 1 AND hotels.villeHotel = "Bretou";

11)	"Compter le nombre d’hôtels par station (nom de la station, nombre d’hôtel)"
    SELECT stations.nomStation as "Nom de la Station", COUNT(hotels.nomHotel) as "nombre d'hotels" 
    FROM stations 
    INNER JOIN hotels ON stations.idStation = hotels.idStation
    GROUP BY stations.nomStation;

12)	"Compter le nombre de chambres par station (nom de la station, nombre de chambres)"
    SELECT stations.nomStation as "Nom de la Station", COUNT(chambres.numChambre) as "Nombre de chambres"
    FROM stations
    INNER JOIN hotels ON stations.idStation = hotels.idStation
    INNER JOIN chambres ON hotels.idHotel = chambres.idHotel
    GROUP BY stations.nomStation;

13)	"Compter le nombre de chambres par station ayant une capacité > 1 (nom de la station, nombre de chambres)"
    SELECT stations.nomStation, COUNT(chambres.numChambre) as "Nombre de chambres"
    FROM stations
    INNER JOIN hotels ON stations.idStation = hotels.idStation
    INNER JOIN chambres ON hotels.idHotel = chambres.idHotel
    WHERE chambres.capaciteChambre > 1
    GROUP BY stations.nomStation;

14)	"Afficher la liste des hôtels pour lesquels Mr Squire a effectué une réservation (nom de l’hôtel)"
    SELECT hotels.nomHotel
    FROM hotels 
    INNER JOIN chambres ON hotels.idHotel= chambres.idHotel
    INNER JOIN reservations ON chambres.idChambre = reservations.idChambre
    INNER JOIN clients ON reservations.idClient = clients.idClient
    WHERE nomClient = "SQUIRE"; 

15)	"Afficher la durée moyenne des réservations par station (nom de la station, durée moyenne)"
    SELECT stations.nomStation, AVG(idReservation) as "Duree Moyenne Reservation"
    FROM stations
    LEFT JOIN hotels ON stations.idStation = hotels.idStation
    LEFT JOIN chambres ON hotels.idHotel = chambres.idHotel
    LEFT JOIN reservations ON chambres.idChambre = reservations.idChambre
    GROUP BY (stations.idStation); 

16)	"Créer une vue qui lit les tables Station, Hôtel et Chambres appelée StationChambre"
    CREATE VIEW StationChambre as
    SELECT stations.nomStation, stations.altitudeStation, hotels.*, chambres.idChambre, chambres.numChambre, chambres.typeChambre, chambres.capaciteChambre
    FROM stations
    INNER JOIN hotels ON stations.idStation = hotels.idStation
    INNER JOIN chambres ON hotels.idHotel = chambres.idHotel;

17)	"Créer une vue qui lit les tables Station, Hôtel et Chambres en jointure gauche appelée StationChambreLeft"
    CREATE VIEW StationChambreLeft as
    SELECT stations.nomStation, stations.altitudeStation, hotels.*, chambres.idChambre, chambres.numChambre, chambres.typeChambre, chambres.capaciteChambre
    FROM stations
    LEFT JOIN hotels ON stations.idStation = hotels.idStation
    LEFT JOIN chambres ON hotels.idHotel = chambres.idHotel;

18)	"Ajouter un champ archivé dans la table réservation"
    DELIMITER |
	CREATE PROCEDURE Archive()
    	BEGIN
        	ALTER TABLE reservations ADD Archive VARCHAR(40) NOT NULL AFTER idChambre;
        END |
    DELIMITER ;

19)	"Créer une procédure stockée qui modifie les enregistrements de la table réservation pour mettre archivé à oui quand la date de fin est inférieure à la date du jour appelée archivage."
    DELIMITER |
    CREATE PROCEDURE Archivage()
        BEGIN
            UPDATE reservations SET Archive = "oui" WHERE dateFinSejour < NOW();
        END |
    DELIMITER ;
    






