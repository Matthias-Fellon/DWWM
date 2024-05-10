-- Création de la base de données
CREATE DATABASE IF NOT EXISTS voyages_database;
USE voyages_database;

DROP TABLE IF EXISTS CLIENT;
DROP TABLE IF EXISTS VOYAGE;
DROP TABLE IF EXISTS RESERVATION;

-- Création de la table CLIENT
CREATE TABLE CLIENT (
    idClient INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    numCB VARCHAR(16)
);

-- Ajout de 50 entrées dans la table CLIENT
INSERT INTO CLIENT (nom, prenom, email, numCB) VALUES
('Smith', 'John', 'john.smith@example.com', '1111222233334444'),
('Johnson', 'Emma', 'emma.johnson@example.com', '2222333344445555'),
('Williams', 'Michael', 'michael.williams@example.com', '3333444455556666'),
('Dupont', 'Jean', 'jean.dupont@example.com', '1111222233332444'),
('Martin', 'Alice', 'alice.martin@example.com', '2222333344449555'),
('Smith', 'Michael', 'michael.smith@example.com', '3333444455552666'),
('Garcia', 'Sophie', 'sophie.garcia@example.com', '4444555566667277'),
('Brown', 'David', 'david.brown@example.com', '5555666677778828'),
('Taylor', 'Olivia', 'olivia.taylor@example.com', '6666777788289999'),
('Clark', 'Daniel', 'daniel.clark@example.com', '7777888899992000'),
('Lopez', 'Charlotte', 'charlotte.lopez@example.com', '8888992900001111'),
('Johnson', 'James', 'james.johnson@example.com', '9999000011212222'),
('Hernandez', 'Emily', 'emily.hernandez@example.com', '1234122412341234');

-- Création de la table VOYAGE
CREATE TABLE VOYAGE (
    idVoyage INT PRIMARY KEY AUTO_INCREMENT,
    Destination VARCHAR(255),
    duree INT,
    prix DECIMAL(10, 2)
);

-- Ajout de 50 entrées dans la table VOYAGE
INSERT INTO VOYAGE (Destination, duree, prix) VALUES
('Paris', 14, 1500.00),
('Paris', 7, 800.00),
('Rome', 10, 1200.00),
('Rome', 5, 600.00),
('Tokyo', 5, 1500.00),
('Tokyo', 10, 3000.00),
('New York', 8, 2000.00),
('Barcelone', 6, 1800.00),
('Sydney', 12, 3500.00),
('Londres', 9, 2200.00),
('Dubai', 7, 2500.00),
('Rio de Janeiro', 11, 2800.00),
('Amsterdam', 5, 750.00);

-- Création de la table RESERVATION
CREATE TABLE RESERVATION (
    idClient INT,
    idVoyage INT,
    dateReservation DATE,
    PRIMARY KEY (idClient, idVoyage),
    FOREIGN KEY (idClient) REFERENCES CLIENT(idClient),
    FOREIGN KEY (idVoyage) REFERENCES VOYAGE(idVoyage)
);

-- Ajout de 50 entrées dans la table RESERVATION
INSERT INTO RESERVATION (idClient, idVoyage, dateReservation) VALUES
(1, 1, '2024-06-01'),
(1, 2, '2024-11-01'),
(1, 3, '2025-03-15'),
(1, 4, '2025-04-01'),
(1, 5, '2025-04-01'),
(1, 6, '2025-04-01'),
(1, 7, '2025-04-01'),
(1, 8, '2025-04-01'),
(1, 9, '2025-04-01'),
(1, 10, '2025-04-01'),
(1, 11, '2025-04-01'),
(1, 12, '2025-04-01'),
(1, 13, '2025-04-01'),
(2, 2, '2024-06-15'),
(3, 3, '2024-07-01'),
(4, 4, '2024-07-15'),
(2, 5, '2024-08-01'),
(6, 6, '2024-08-15'),
(2, 7, '2024-09-01'),
(8, 8, '2024-09-15'),
(9, 9, '2024-10-01'),
(10, 10, '2024-10-15'),
(2, 3, '2024-11-15'),
(3, 4, '2024-12-01'),
(4, 5, '2024-12-15'),
(8, 6, '2025-01-01'),
(6, 7, '2025-01-15'),
(3, 8, '2025-02-01'),
(8, 9, '2025-02-15'),
(9, 10, '2025-03-01'),
(2, 6, '2025-04-15'),
(3, 6, '2025-05-01'),
(4, 7, '2025-05-15'),
(6, 9, '2025-06-15'),
(4, 1, '2025-07-01'),
(13, 2, '2025-07-15'),
(12, 3, '2025-08-01'),
(11, 4, '2025-08-15');
