-- Insérer des données de test pour chaque table

-- Table Portee
INSERT INTO Portee (Date_Naissance, Nombre_Chatons) VALUES
    ('2023-01-15', 4),
    ('2023-03-22', 3),
    ('2023-06-10', 5);

-- Table Vaccin
INSERT INTO Vaccin (Nom) VALUES
    ('Rage'),
    ('Typhus'),
    ('Coronavirus');

-- Table Test (ne sera pas remplie ici)

-- Table Personne
INSERT INTO Personne (Nom, Prenom, Adresse, Telephone, Email) VALUES
    ('Dupont', 'Jean', '123 Rue des Chats', 1234567890, 'jean.dupont@example.com'),
    ('Durand', 'Marie', '456 Avenue Félin', 9876543210, 'marie.durand@example.com');

-- Table Eleveur
INSERT INTO Eleveur (ID_Personne, Nom_Elevage, Numero_Siret, Description, Nom, Prenom, Adresse, Telephone, Email) VALUES
    (1, 'Elevage du Bonheur', 12345678901234, 'Elevage familial de chats persans', 'Dupont', 'Jean', '123 Rue des Chats', 1234567890, 'jean.dupont@example.com');

-- Table Adoptant
INSERT INTO Adoptant (ID_Personne, Date_Adoption, Nom, Prenom, Adresse, Telephone, Email) VALUES
    (2, '2023-02-28', 'Durand', 'Marie', '456 Avenue Félin', 9876543210, 'marie.durand@example.com');

-- Table Role
INSERT INTO Role (Nom) VALUES
    ('SuperAdministrateur'),
    ('Administrateur'),
    ('Utilisateur');

-- Table Privilege
INSERT INTO Privilege (Nom) VALUES
    ('SuperAdministrateur'),
    ('Administrateur'),
    ('Utilisateur');

-- Table Utilisateur
INSERT INTO Utilisateur (ID_Personne, Mot_De_Passe, Nom, Prenom, Adresse, Telephone, Email, ID_Privilege) VALUES
    (1, 'hashedpassword123', 'Dupont', 'Jean', '123 Rue des Chats', 1234567890, 'jean.dupont@example.com', 1),
    (2, 'hashedpassword456', 'Durand', 'Marie', '456 Avenue Félin', 9876543210, 'marie.durand@example.com', 3);

-- Table TypeFourrureRace
INSERT INTO TypeFourrureRace (Nom) VALUES
    ('Court'),
    ('Long'),
    ('Mi-long');

-- Table CouleurFourrureRace
INSERT INTO CouleurFourrureRace (Nom) VALUES
    ('Blanc'),
    ('Noir'),
    ('Roux');

-- Table CouleurYeuxRace
INSERT INTO CouleurYeuxRace (Nom) VALUES
    ('Bleu'),
    ('Vert'),
    ('Jaune');

-- Table CouleurCoussinetRace
INSERT INTO CouleurCoussinetRace (Nom) VALUES
    ('Rose'),
    ('Noir'),
    ('Blanc');

-- Table TypeFourrure
INSERT INTO TypeFourrure (Nom, ID_TypeFourrureRace) VALUES
    ('Court', 1),
    ('Long', 2),
    ('Mi-long', 3);

-- Table CouleurFourrure
INSERT INTO CouleurFourrure (Nom, ID_CouleurFourrureRace) VALUES
    ('Blanc', 1),
    ('Noir', 2),
    ('Roux', 3);

-- Table CouleurYeux
INSERT INTO CouleurYeux (Nom, ID_CouleurYeuxRace) VALUES
    ('Bleu', 1),
    ('Vert', 2),
    ('Jaune', 3);

-- Table CouleurCoussinet
INSERT INTO CouleurCoussinet (Nom, ID_CouleurCoussinetRace) VALUES
    ('Rose', 1),
    ('Noir', 2),
    ('Blanc', 3);

-- Table Personne_Role
INSERT INTO Personne_Role (ID_Personne, ID_Role) VALUES
    (1, 1),
    (2, 3);

-- Table Animal
INSERT INTO Animal (Nom, Date_Naissance, Sexe, Date_Adoption, ID_Personne) VALUES
    ('Minou', '2022-12-05', 'M', '2023-01-01', 1),
    ('Félix', '2023-04-15', 'M', '2023-05-20', 1),
    ('Misty', '2023-07-20', 'F', '2023-09-01', 2);

-- Table Espece
INSERT INTO Espece (Nom, ID_Animal) VALUES
    ('Chat domestique', 1),
    ('Chat domestique', 2),
    ('Chat domestique', 3);

-- Table Race
INSERT INTO Race (Nom, Description, ID_Espece, ID_TypeFourrureRace, ID_CouleurCoussinetRace, ID_CouleurFourrureRace, ID_CouleurYeuxRace) VALUES
    ('Persan', 'Race de chat à poil long', 1, 2, 1, 2, 1),
    ('Siamois', 'Race de chat avec un pelage clair et des yeux bleus', 2, 1, 3, 3, 2),
    ('Maine Coon', 'Race de chat originaire des États-Unis', 3, 3, 2, 1, 3);

-- Table Race_Portee
INSERT INTO Race_Portee (ID_Portee, ID_Race) VALUES
    (1, 1),
    (2, 2),
    (3, 3);

-- Ajouter d'autres données selon les besoins