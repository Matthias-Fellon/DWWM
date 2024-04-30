# 1) Les jointures internes
### Récupérer tous les personnages et leur classe :
➢ SELECT * 
FROM personnage 
INNER JOIN classe 
ON personnage.idClasse = classe.idclasse;
### Récupérer toutes les armes et leur type, vous devez afficher seulement le nom de l’arme, le level minimum, les dégâts de l’arme, le libelle, et le champ est à distance :
➢ SELECT nom, levelMin, libelle, estDistance 
FROM arme 
INNER JOIN typearme 
ON arme.idTypeArme = typearme.idTypeArme;
# 2) Les jointures et surnoms de tables
### Récupérer le nom des personnages et le nom de leur classe :
➢ SELECT personnage.nom, classe.nom 
FROM personnage 
INNER JOIN classe 
ON personnage.idClasse = classe.idClasse;
### Récupérer l’arme qui est utilisée par chaque personnage :
➢ SELECT personnage.nom, arme.nom, arme.levelMin, arme.degat 
FROM personnage 
INNER JOIN arme 
ON personnage.idArmeUtilise = arme.idArme;
### Récupérer l’arme qui est utilisée par chaque personnage et le type d’arme :
➢ SELECT personnage.nom, arme.nom, arme.levelMin, arme.degat, typearme.libelle, typearme.estDistance 
FROM personnage 
INNER JOIN arme 
ON personnage.idArmeUtilise = arme.idArme 
INNER JOIN typearme 
ON arme.idTypeArme = typearme.idTypeArme;
# 3) Jointures et filtres
### Récupérer toutes les armes de tous les personnages :
➢ SELECT p.nom AS "Nom personnage", p.level, a.nom AS "Arme", a.levelMin 
FROM dispose d 
INNER JOIN personnage p ON d.idPersonnage = p.idPersonnage 
INNER JOIN arme a ON d.idArme = a.idArme;
### Récupérer toutes les armes qui ne sont pas à distance :
➢ SELECT arme.nom, arme.levelMin, arme.degat, typearme.libelle 
FROM arme 
INNER JOIN typearme 
ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.estDistance=0;
### Récupérer l’arme utilisée par chaque guerrier :
➢ SELECT personnage.nom AS "Personnage", arme.nom AS "Arme utilisée", typearme.libelle AS "Type d'arme" 
FROM personnage 
INNER JOIN arme ON personnage.idArmeUtilise = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
INNER JOIN classe ON personnage.idClasse = classe.idClasse 
WHERE classe.nom = "Guerrier";
# 4) Jointures, calculs et tris
### Récupérer toutes les armes dont disposent les joueurs ayant le level 10 :
➢ SELECT personnage.idPersonnage, personnage.nom AS "Perso", arme.nom AS "Arme", typearme.libelle AS "Type" 
FROM dispose 
INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE personnage.level = 10;
### Récupérer toutes les armes dont disposent les joueurs ayant le level 10, triées par id Personnage :
➢ SELECT personnage.idPersonnage, personnage.nom AS "Perso", arme.nom AS "Arme", typearme.libelle AS "Type" 
FROM dispose 
INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE personnage.level = 10 
ORDER BY personnage.idPersonnage;
### Récupérer la moyenne des dégâts des armes à distance :
➢ SELECT AVG(arme.degat) AS "Moyenne de dégat des armes à distance" 
FROM arme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.estDistance=1;
### Récupérer tous les personnages disposant d’une arme d’un type commençant par « a » :
➢ SELECT personnage.nom 
FROM personnage 
INNER JOIN dispose ON personnage.idPersonnage = dispose.idPersonnage 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.libelle LIKE "A%" 
GROUP BY personnage.nom;
# 5) Les jointures externes
### Récupérer tous les types d’armes même ceux qui n’ont pas d’arme associée :
➢ SELECT ta.libelle AS "Type", a.nom AS "Arme" 
FROM typearme ta 
LEFT JOIN arme a 
ON ta.idTypeArme = a.idTypeArme;
### Récupérer tous les types d’armes, et afficher les armes pour chaque type (même les types qui n’ont pas d’arme). Avec un RIGHT JOIN :
➢ SELECT ta.libelle AS "Type", a.nom AS "Arme" 
FROM arme a 
RIGHT JOIN typearme ta 
ON ta.idTypeArme = a.idTypeArme;
### Récupérer toutes les armes et afficher le personnage qui les utilise, ordonnées par le level minimum(l’objectif est de récupérer toutes armes et d’associer les personnages) :
➢ SELECT * 
FROM arme a 
LEFT JOIN personnage p 
ON a.idArme = p.idArmeUtilise 
ORDER BY a.levelMin;
### Récupérer toutes les armes et voir les personnages qui les ont en leur possession (table dispose), avec RIGHT JOIN (ordonné) :
➢ SELECT a.idArme, a.nom AS "Nom", p.nom AS "Personnage" 
FROM  personnage p 
RIGHT JOIN dispose d ON  d.idPersonnage = p.idPersonnage 
RIGHT JOIN arme a ON d.idArme = a.idArme;
# Autres requêtes
### Récupérer toutes les armes dont dispose chaque guerrier
➢ SELECT personnage.nom AS "Personnage", arme.nom AS "Arme utilisée", typearme.libelle AS "Type d'arme" 
FROM (dispose INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage) 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
INNER JOIN classe ON personnage.idClasse = classe.idClasse 
WHERE classe.nom = "Guerrier";