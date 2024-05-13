-- Création de la base de données
CREATE DATABASE IF NOT EXISTS festival_database;
USE festival_database;

DROP TABLE IF EXISTS MUSICIEN;
DROP TABLE IF EXISTS PROGRAMMER;
DROP TABLE IF EXISTS REPRESENTATION;

-- Création de la table REPRESENTATION
CREATE TABLE REPRESENTATION (
    idRepresentation INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255),
    lieu VARCHAR(255)
);

-- Ajout de quelques entrées
INSERT INTO REPRESENTATION (titre, lieu) VALUES
('Festival de Jazz', 'Parc Municipal'),
('Concert de Musique Classique', 'Église Saint-Pierre'),
('Soirée de Rock Alternatif', 'Salle des Fêtes'),
('Fête de la Musique', 'Mogador'),
('Concert de Musique Électronique', 'Club Underground'),
('Spectacle de Musique Traditionnelle', 'Théâtre de la Ville'),
('Festival de Musique Country', 'Ranch de la Vallée'),
("Concert de Musique Contemporaine", "Galerie d'Art Moderne"),
('Soirée de Musique Folklorique', 'Château de la Forêt'),
("Concert de Musique Expérimentale", "Centre d'Exposition"),
('Fête de la Bière et de la Musique', 'Brasserie du Coin'),
('Concert de Musique Celtique', 'Forêt Enchantée'),
('Festival de Musique du Monde', 'Mogador'),
('Concert de Musique Reggae', 'Bar de la Plage'),
('Soirée de Musique Indie', 'Sous-sol de la Ville'),
('Concert de Musique Urbaine', 'Ruelle Animée'),
('Festival de Musique Africaine', 'Jardin Botanique'),
('Concert de Musique Latino', 'Place de la Salsa'),
('Soirée de Musique Orientale', 'Mogador'),
('Concert de Musique Indienne', 'Temple Hindou');


-- Création de la table MUSICIEN
CREATE TABLE MUSICIEN (
    idMusicien INT AUTO_INCREMENT PRIMARY KEY,
    nomMusicien VARCHAR(255),
    idRepresentation INT,
    FOREIGN KEY (idRepresentation) REFERENCES REPRESENTATION(idRepresentation)
);

-- Ajout de quelques entrées
INSERT INTO MUSICIEN (nomMusicien, idRepresentation) VALUES
('Jean Dupont', 1),
('Alice Martin', 2),
('Mohammed Khan', 3),
('Elena Gomez', 4),
('Andrea Rossi', 5),
('John Smith', 20),
('Emma Johnson', 3),
('Michael Brown', 4),
('Sophie Wilson', 5),
('David Taylor', 6),
('Olivia Martinez', 7),
('Daniel Jones', 8),
('Charlotte Garcia', 9),
('James Davis', 10),
('Emily Rodriguez', 11),
('William Miller', 12),
('Chloe Lopez', 13),
('Joseph Moore', 14),
('Amelia Hernandez', 15),
('Benjamin Lee', 16),
('Mia Gonzalez', 17),
('Henry Perez', 18),
('Ella Sanchez', 19),
('Samuel Clark', 20),
('Grace Young', 20);

-- Création de la table PROGRAMMER
CREATE TABLE PROGRAMMER (
    date DATE,
    idRepresentation INT,
    tarif DECIMAL(10, 2),
    PRIMARY KEY (date, idRepresentation),
    FOREIGN KEY (idRepresentation) REFERENCES REPRESENTATION(idRepresentation)
);

-- Ajout de quelques entrées
INSERT INTO PROGRAMMER (date, idRepresentation, tarif) VALUES
('2024-09-01', 1, 55.00),
('2024-09-15', 2, 30.00),
('2024-10-10', 3, 60.00),
('2024-10-25', 4, 35.00),
('2024-11-05', 5, 15.00),
('2024-11-20', 6, 40.00),
('2024-12-01', 7, 18.00),
('2024-12-15', 8, 28.00),
('2025-01-10', 9, 22.00),
('2025-01-25', 10, 75.00),
('2025-02-05', 11, 17.00),
('2025-02-20', 12, 32.00),
('2025-03-01', 13, 80.00),
('2025-03-15', 14, 34.00),
('2025-04-10', 15, 23.00),
('2025-04-25', 16, 37.00),
('2025-05-05', 17, 16.00),
('2025-05-20', 18, 31.00),
('2022-07-25', 19, 26.00),
('2022-07-25', 20, 55.00);