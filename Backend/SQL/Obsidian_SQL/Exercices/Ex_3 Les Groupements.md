# 1) Regroupement et GROUP BY
### Afficher le nombre d’arme par type d’arme :
➢ SELECT ta.libelle AS "Type d'arme", COUNT(a.idArme) AS "NB d'arme" 
FROM arme a 
INNER JOIN typearme ta ON a.idTypeArme = ta.idTypeArme 
GROUP BY ta.libelle;
### Afficher le nombre de personnage par classe :
➢ SELECT c.nom AS "Classe", c.description, COUNT(p.idClasse) AS "NB personnage" 
FROM personnage p 
INNER JOIN classe c ON p.idClasse = c.idClasse 
GROUP BY p.idClasse;
### Afficher le nombre d’armes dont dispose chaque personnage :
➢ SELECT p.nom AS "Personnage", COUNT(d.idArme) AS "NB armes" 
FROM dispose d 
INNER JOIN personnage p ON d.idPersonnage = p.idPersonnage 
GROUP BY p.nom;
### Afficher le nombre d’armes dont dispose chaque personnage mais seulement les guerriers Résultat :
➢ SELECT c.nom AS "Classe", p.nom, COUNT(d.idArme) AS "NB dispose arme" 
FROM dispose d 
INNER JOIN personnage p ON d.idPersonnage = p.idPersonnage 
INNER JOIN classe c ON p.idClasse = c.idClasse 
WHERE c.nom = "Guerrier" 
GROUP BY p.nom;
### Afficher le nombre de personnage par arme :
➢ SELECT a.nom, COUNT(p.nom) AS "NB personnage ayant cette arme" 
FROM dispose d 
RIGHT JOIN arme a ON d.idArme = a.idArme 
GROUP BY a.nom;
### Afficher le niveau moyen de chaque classe :
➢ SELECT c.nom AS "Classe", AVG(p.level) AS "Niveau moyen" 
FROM personnage p 
INNER JOIN classe c ON p.idClasse = c.idClasse 
GROUP BY c.nom;
# 2) Regroupement et HAVING : « Having » permet de filtrer sur les fonctions de calcul (AVG / COUNT/SUM/MIN/MAX)
### Afficher le niveau moyen de chaque classe et ne récupérer que les classes ayant un niveau minimum de 9 :
➢ SELECT c.nom AS "Classe", AVG(p.level) AS "Niveau moyen" 
FROM personnage p 
INNER JOIN classe c ON p.idClasse = c.idClasse  
GROUP BY c.nom 
HAVING AVG(p.level)>=9;
### Afficher le nombre de personnage par arme et ne garder que les armes ayant entre 1 et 2 utilisateurs (table dispose) :
➢ SELECT a.nom AS "Nom", COUNT(*) AS "NB_utilisateurs" 
FROM dispose d 
JOIN arme a ON d.idArme = a.idArme 
GROUP BY Nom 
HAVING NB_utilisateurs BETWEEN 1 AND 2;
### Afficher le nombre d’arme par type d’arme mais ne prendre que les armes de corps à corps présentes au maximum 1 fois :
➢ SELECT ta.libelle AS "Type d'arme", COUNT(a.idArme) AS "NB d'arme" 
FROM arme a 
RIGHT JOIN typearme ta ON a.idTypeArme = ta.idTypeArme 
WHERE ta.estDistance=0 
GROUP BY ta.libelle 
HAVING  COUNT(a.idArme)<=1;
