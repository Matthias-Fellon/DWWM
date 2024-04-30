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
➢ SELECT p.nom AS "Personnage", COUNT(a.idArme) AS "NB armes" 
FROM (dispose d INNER JOIN personnage p ON d.idPersonnage = p.idPersonnage) 
INNER JOIN arme a ON d.idArme = a.idArme 
GROUP BY p.nom;
### Afficher le nombre d’armes dont dispose chaque personnage mais seulement les guerriers Résultat :
➢ SELECT personnage.nom AS "Personnage", arme.nom AS "Arme utilisée", typearme.libelle AS "Type d'arme" 
FROM (dispose INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage) 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
INNER JOIN classe ON personnage.idClasse = classe.idClasse 
ORDER BY classe.nom = "Guerrier" 
GROUP BY personnage.nom;
!!!!PB!!!!!
### Afficher le nombre de personnage par arme :
➢ 
### Afficher le niveau moyen de chaque classe :
➢ 
# 2) Regroupement et HAVING : « Having » permet de filtrer sur les fonctions de calcul (AVG / COUNT/SUM/MIN/MAX)
### Afficher le niveau moyen de chaque classe et ne récupérer que les classes ayant un niveau minimum de 9 :
➢ 
### Afficher le nombre de personnage par arme et ne garder que les armes ayant entre 1 et 2 utilisateurs (table dispose) :
➢ 
### Afficher le nombre d’arme par type d’arme mais ne prendre que les armes de corps à corps présentes au maximum 1 fois :
➢ 