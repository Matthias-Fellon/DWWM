/****************************************************************/
/*                                                              */
/*                          EXERCICE 2                          */
/*                                                              */
/****************************************************************/

/*QUESTION 1*/
SELECT nom, prenom, email
FROM reservation
INNER JOIN client 
    ON client.idClient = reservation.idClient
GROUP BY client.idClient;

/*QUESTION 2*/
SELECT nom, prenom, email
FROM reservation
RIGHT JOIN client 
    ON client.idClient = reservation.idClient
WHERE reservation.idVoyage IS NULL;

/*QUESTION 3*/
SELECT nom, prenom, Destination, duree, prix
FROM reservation 
INNER JOIN client 
    ON client.idClient = reservation.idClient
INNER JOIN voyage 
    ON voyage.idVoyage = reservation.idVoyage
WHERE duree>10 AND prix<1000;

/*QUESTION 4*/
SELECT idClient, nom, prenom
FROM client
WHERE NOT EXISTS (
    SELECT idVoyage
    FROM voyage
    WHERE idVoyage NOT IN (
        SELECT idVoyage
        FROM reservation
        WHERE reservation.idClient = client.idClient
    )
);