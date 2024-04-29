### 1. Obtenir la liste des 10 villes les plus peuplées en 2012
➢ SELECT ville_nom,ville_population_2012 FROM villes_france_free 
ORDER BY ville_population_2012 DESC 
LIMIT 10;
### 2. Obtenir la liste des 50 villes ayant la plus faible superficie
➢ SELECT ville_nom,ville_surface FROM villes_france_free 
ORDER BY ville_surface
LIMIT 50;
### 3. Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97”
➢ SELECT * FROM departement WHERE departement_code>97; 
### 4. Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé
➢ SELECT ville_nom,ville_population_2012,departement_nom 
FROM villes_france_free VFF, departement D 
WHERE D.departement_code = VFF.ville_departement 
ORDER BY ville_population_2012 DESC 
LIMIT 10;
### 5. Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces département, en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes
➢ SELECT departement_nom, departement_code, COUNT(ville_id) 
FROM villes_france_free VFF, departement D 
WHERE D.departement_code = VFF.ville_departement 
GROUP BY departement_nom 
ORDER BY COUNT(ville_id) DESC;
### 6. Obtenir la liste des 10 plus grands départements, en terme de superficie
➢ SELECT departement_nom, departement_code, SUM(ville_surface) 
FROM villes_france_free VFF, departement D 
WHERE D.departement_code = VFF.ville_departement 
GROUP BY departement_nom 
ORDER BY SUM(ville_surface) DESC 
LIMIT 10;
### 7. Compter le nombre de villes dont le nom commence par “Saint”
➢ SELECT COUNT(*) FROM villes_france_free WHERE ville_nom LIKE "saint%";
### 8. Obtenir la liste des villes qui ont un nom existants plusieurs fois, et trier afin d’obtenir en premier celles dont le nom est le plus souvent utilisé par plusieurs communes
➢ SELECT ville_nom 
FROM villes_france_free AS A 
INNER JOIN
(SELECT ville_nom, COUNT(*) AS nbrNomVille 
FROM villes_france_free 
GROUP BY ville_nom) AS B 
ON A.ville_nom = B.ville_nom 
ORDER BY nbrNomVille DESC; 
!!! PB !!!

### 9. Obtenir en une seule requête SQL la liste des villes dont la superficie est supérieur à la superficie moyenne
➢
### 10. Obtenir la liste des départements qui possèdent plus de 2 millions d’habitants
➢
### 11. Remplacez les tirets par un espace vide, pour toutes les villes commençant par “SAINT-” (dans la colonne qui contient les noms en majuscule)
➢ 