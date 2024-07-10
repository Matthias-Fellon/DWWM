-- Table Chat
INSERT INTO Chat (ID_Animal, Nom, Race, Date_Naissance, Sexe, Image, Puce_Electronique, Livre_Origine, ADN, Statut) VALUES
(1, 'Misty', 'Persan', '2020-03-15', 'F', 'misty.jpg', '1234567890', 'LO12345', 'ADN12345', 'Available'),
(2, 'Tom', 'Exotic Shorthair', '2019-06-22', 'M', 'tom.jpg', '1234567891', 'LO12346', 'ADN12346', 'Adopted'),
(3, 'Leo', 'Bengal', '2021-01-11', 'M', 'leo.jpg', '1234567892', 'LO12347', 'ADN12347', 'Available'),
(4, 'Luna', 'Sphynx', '2018-11-05', 'F', 'luna.jpg', '1234567893', 'LO12348', 'ADN12348', 'Adopted');

-- Table Vaccin
INSERT INTO Vaccin (ID_Vaccin, Nom) VALUES
(1, 'Rabies'),
(2, 'Feline Distemper'),
(3, 'Feline Herpesvirus'),
(4, 'Feline Calicivirus');

-- Table Test
INSERT INTO Test (ID_Test, Nom, Resultat) VALUES
(1, 'FIV', 'Negative'),
(2, 'FeLV', 'Negative'),
(3, 'Blood Type', 'A'),
(4, 'FIP', 'Negative');

-- Table Animal_Vaccin
INSERT INTO Animal_Vaccin (ID_Animal, ID_Vaccin, Date_Administration) VALUES
(1, 1, '2021-04-01'),
(1, 2, '2021-04-01'),
(2, 1, '2020-07-01'),
(3, 3, '2021-02-15'),
(4, 4, '2019-12-01');

-- Table Effectuer
INSERT INTO Effectuer (ID_Animal, ID_Test) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 1);

-- Table A_Pour_Mere
INSERT INTO A_Pour_Mere (ID_Animal, ID_Mere) VALUES
(1, 4),
(3, 4);

-- Table A_Pour_Pere
INSERT INTO A_Pour_Pere (ID_Animal, ID_Pere) VALUES
(3, 2);

-- Table Adopter
INSERT INTO Adopter (ID_Animal, ID_Personne, Date_Adoption) VALUES
(2, 2, '2019-12-10'),
(3, 1, '2020-08-01'),
(4, 2, '2019-12-15');

-- Table Personne
INSERT INTO Personne (ID_Personne, Nom, Prenom, Adresse, Telephone, Email) VALUES
(1, 'Smith', 'John', '123 Cat St, Feline City', '555-1234', 'john.smith@example.com'),
(2, 'Doe', 'Jane', '456 Kitten Ln, Meowtown', '555-5678', 'jane.doe@example.com');

-- Table Eleveur
INSERT INTO Eleveur (ID_Personne, Nom_Elevage, Numero_Siret, Description) VALUES
(1, 'Purrfect Pets', '987654321', 'Professional cat breeder with over 10 years of experience.');

-- Table Adoptant
INSERT INTO Adoptant (ID_Personne, Date_Adoption) VALUES
(1, '2019-12-16'),
(2, '2019-12-15');

-- Table Utilisateur
INSERT INTO Utilisateur (ID_Personne, Mot_De_Passe) VALUES
(1, 'password123'),
(2, 'securepass456');

-- Table Privilege
INSERT INTO Privilege (ID_Privilege, Nom) VALUES
(1, 'Admin'),
(2, 'User');

-- Table Utilisateur_Privilege
INSERT INTO Utilisateur_Privilege (ID_Personne, ID_Privilege) VALUES
(1, 1),
(2, 2);

-- Table Titre
INSERT INTO Titre (ID_Titre, Nom) VALUES
(1, 'Champion'),
(2, 'Grand Champion');

-- Table Animal_Titre
INSERT INTO Animal_Titre (ID_Animal, ID_Titre, Date) VALUES
(1, 1, '2022-05-01'),
(3, 2, '2023-01-15');

-- Table Image
INSERT INTO Image (ID_Image, Image) VALUES
(1, 'misty1.jpg'),
(2, 'tom1.jpg'),
(3, 'leo1.jpg'),
(4, 'luna1.jpg');

-- Table Animal_Image
INSERT INTO Animal_Image (ID_Animal, ID_Image) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);