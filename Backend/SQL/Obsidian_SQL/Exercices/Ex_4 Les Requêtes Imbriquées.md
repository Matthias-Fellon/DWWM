# 1) Les requêtes imbriquées
### Récupérer les armes ayant un nombre de dégâts supérieurs à la moyenne du nombre de dégâts de toutes les armes :
➢ SELECT a.nom, a.degat 
FROM arme a 
WHERE a.degat>(SELECT AVG(a.degat) FROM arme a);
### Récupérer les personnages ayant un « level » inférieur à la moyenne :
➢ SELECT *
FROM personnage p 
WHERE p.level<(SELECT AVG(p.level) FROM personnage p);
### Récupérer les personnages ayant un « level » supérieur à la moyenne des archers :
➢ SELECT *
FROM personnage p 
WHERE p.level>(SELECT AVG(p.level) FROM personnage p INNER JOIN classe c ON p.idClasse = c.idClasse WHERE c.nom = "Archer");
#  2) Les requêtes imbriquées plus complexes
### Pour les armes à distances, récupérer le nombre maximum d’occurrence du type d’arme :
➢ SELECT MAX(valeur) 
FROM (SELECT COUNT(*) AS 'valeur' 
FROM arme 
INNER JOIN typeArme ON arme.idTypeArme = typeArme.idTypeArme 
WHERE estDistance = 1 
GROUP BY typeArme.idTypeArme) t1;