# 1) Gestion des tables
### Créer la table attaque :
➢ CREATE TABLE attaque(
idAttaque INT(11) PRIMARY KEY NOT NULL, 
nom VARCHAR(60)
);
### Modifier la table attaque pour ajouter les champs "baseDegat (int)" et "test (TINYINT)" :
➢ ALTER TABLE attaque 
ADD baseDegat INT(11), 
ADD test TINYINT(5);
### Modifier le champs "test" en passant en varchar (50) :
➢ ALTER TABLE attaque 
MODIFY test VARCHAR(50);
### Renommer le champs test en "toto" en changeant aussi le type en INT :
➢ ALTER TABLE attaque 
CHANGE test toto INT(11);
### Supprimer le champs toto :
➢ ALTER TABLE attaque 
DROP toto;
### Créer la table "utilise" contenant l’id d’un personnage et l’id d’une attaque, et le level d’une attaque :
➢ CREATE TABLE utilise(
idAttaque INT(11) NOT NULL, 
idPersonnage INT(11) NOT NULL, 
levelAttaque INT(11)
);

ALTER TABLE utilise 
ADD PRIMARY KEY (`idAttaque`,`idPersonnage`),
ADD KEY `FK_PERSONNAGE` (`idPersonnage`),
ADD CONSTRAINT `FK_PERSONNAGE` FOREIGN KEY (`idPersonnage`) REFERENCES `personnage` (`idPersonnage`);

# 2) Gestion des données
### Ajouter des lignes dans la table "attaque", puis dans la table "utilise" :
➢ INSERT INTO attaque (idAttaque, nom, baseDegat) VALUES 
(1, "attaque1", 5),
(2, "attaque2", 10),
(3, "attaque3", 15),
(4, "attaque4", 20);

INSERT INTO utilise (idAttaque, idPersonnage, levelAttaque) VALUES 
(1,1,2),
(2,1,2),
(2,2,1),
(4,3,2),
(1,4,3),
(4,5,3);
### Modifier l’attaque de toutes les lignes pour que les dégâts soient égaux à 10 :
➢  UPDATE attaque 
SET baseDegat = 10;
### Modifier les attaques avec les identifiants 2 et 3 pour qu’elles disposent de 50 dégâts :
➢ UPDATE attaque 
SET baseDegat = 50 WHERE idAttaque BETWEEN 2 AND 3;
### Modifier la table personnage pour rajouter une date de naissance, définir ensuite une valeur pour chaque personnage :
➢ UPDATE personnage 
SET dateNaissance = 
CASE 
WHEN idPersonnage = 1 THEN '2001-01-01'
WHEN idPersonnage = 2 THEN '2001-02-01'
WHEN idPersonnage = 3 THEN '2002-03-01'
WHEN idPersonnage = 4 THEN '2003-06-01'
WHEN idPersonnage = 5 THEN '2001-04-01'
WHEN idPersonnage = 6 THEN '2007-02-01'
WHEN idPersonnage = 7 THEN '2003-05-01'
END 
WHERE idPersonnage IN (1, 2, 3, 4, 5, 6, 7);
