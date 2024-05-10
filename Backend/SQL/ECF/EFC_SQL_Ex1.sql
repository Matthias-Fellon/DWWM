/****************************************************************/
/*                                                              */
/*                          EXERCICE 1                          */
/*                                                              */
/****************************************************************/

/*QUESTION 1*/
SELECT titre 
FROM representation;

/*QUESTION 2*/
SELECT titre 
FROM representation WHERE lieu="Mogador";

/*QUESTION 3*/
SELECT nomMusicien, titre
FROM musicien 
INNER JOIN representation 
    ON musicien.idRepresentation = representation.idRepresentation;

/*QUESTION 4*/
SELECT titre, lieu, tarif 
FROM representation
INNER JOIN  programmer 
    ON programmer.idRepresentation = representation.idRepresentation
WHERE date = "2022-07-25";

/*QUESTION 5*/
SELECT COUNT(idMusicien) AS "Nombre de musiciens"
FROM musicien
WHERE musicien.idRepresentation = 20;

/*QUESTION 6*/
SELECT titre, date
FROM programmer
INNER JOIN representation 
    ON programmer.idRepresentation = representation.idRepresentation
WHERE tarif<50;
