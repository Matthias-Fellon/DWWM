----------------------------------------------------------------------
-- Script de données de test
----------------------------------------------------------------------

-- Insertion des données dans la table Portee
INSERT INTO Portee (Date_Naissance, Nombre_Chatons) VALUES 
('2023-01-15', 4),
('2023-03-20', 3),
('2023-05-10', 5);

-- Insertion des données dans la table Vaccin
INSERT INTO Vaccin (Nom) VALUES 
('Rage'),
('Typhus'),
('Leucose');

-- Insertion des données dans la table Depistage_Maladie
INSERT INTO Depistage_Maladie (PKD, FIV, FELV, Identification_Genetique) VALUES -- A MODIFIER
(NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL);

-- Insertion des données dans la table Personne
INSERT INTO Personne (Nom, Prenom, Adresse, Telephone, Email) VALUES 
('Dupont', 'Jean', '123 Rue Principale', '0123456789', 'jean.dupont@example.com'),
('Martin', 'Marie', '456 Avenue des Champs', '0987654321', 'marie.martin@example.com'),
('Bernard', 'Paul', '789 Boulevard de la Paix', '0112233445', 'paul.bernard@example.com');

-- Insertion des données dans la table Eleveur
INSERT INTO Eleveur (ID_Personne, Nom_Elevage, Numero_Siret, Description, Nom, Prenom, Adresse, Telephone, Email) VALUES 
(1, 'Elevage de la Belle Etoile', '12345678900010', 'Petit élevage familial', 'Dupont', 'Jean', '123 Rue Principale', '0123456789', 'jean.dupont@example.com');

-- Insertion des données dans la table Adoptant
INSERT INTO Adoptant (ID_Personne, Date_Adoption, Nom, Prenom, Adresse, Telephone, Email) VALUES 
(2, '2024-01-01', 'Martin', 'Marie', '456 Avenue des Champs', '0987654321', 'marie.martin@example.com'),
(3, '2024-02-01', 'Bernard', 'Paul', '789 Boulevard de la Paix', '0112233445', 'paul.bernard@example.com');

-- Insertion des données dans la table Privilege
INSERT INTO Privilege (Nom) VALUES 
('SuperAdministrateur'),
('Administrateur'),
('Utilisateur');

-- Insertion des données dans la table Utilisateur
INSERT INTO Utilisateur (ID_Personne, Mot_De_Passe, Nom, Prenom, Adresse, Telephone, Email, ID_Privilege) VALUES 
(1, 'password123', 'Dupont', 'Jean', '123 Rue Principale', '0123456789', 'jean.dupont@example.com', 1);

-- Insertion des données dans la table Animal
INSERT INTO Animal (Nom, Date_Naissance, Sexe, Image_Bebe, Image_Adulte, Date_Adoption, ID_Test, ID_Animal_A_Pour_Mere, ID_Animal_A_Pour_Pere, ID_Personne) VALUES -- A MODIFIER 
('Minou', '2023-01-15', 'M', NULL, NULL, '2024-01-01', 1, NULL, NULL, 2),
('Mina', '2023-03-20', 'F', NULL, NULL, '2024-02-01', 2, NULL, NULL, 3);

-- Insertion des données dans la table Race
INSERT INTO Race (ID_Race, Nom, Description, ID_Espece) VALUES -- A MODIFIER
(1, 'Siamois', 'Chat de race siamois'),
(2, 'Persan', 'Chat de race persan');

-- Insertion des données dans la table Animal_Vaccin
INSERT INTO Animal_Vaccin (ID_Vaccin, ID_Animal, Date_Administration) VALUES 
(1, 1, '2024-01-15'),
(2, 2, '2024-02-15');

-- Insertion des données dans la table Race_Portee
INSERT INTO Race_Portee (ID_Portee, ID_Race) VALUES -- A MODIFIER
(1, 1),
(2, 2);
