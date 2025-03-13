-- Table Personne
INSERT INTO Personne (ID_Personne, Nom, Prenom, Sexe, Telephone, Email) VALUES
(1, 'Fellon', 'Matthias', '0000000000', '', 'matthias.fellon@gmail.com'),
(2, 'Fournier', 'Dorothée', '0614000000', '', 'dorothee.fournier@gmail.com'),
(3, 'Dupont', 'Jean', '0123456789', 'M', 'jean.dupont@gmail.com'),
(4, 'Martin', 'Sophie', '0987654321', 'F', 'sophie.martin@gmail.com');

-- Table Eleveur
INSERT INTO Eleveur (ID_Eleveur, Nom_Elevage, Numero_Siret, Description, ID_Personne) VALUES
(1, 'Elevage des Fell de Chymé', '12345678901234', 'Elevage spécialisé dans les races de chat de type Persan', 1);

-- Table Privilege
INSERT INTO Privilege (ID_Privilege, Role) VALUES
(1, 'SuperAdministrateur'),
(2, 'Administrateur'),
(3, 'Utilisateur');

-- Table Utilisateur
INSERT INTO Utilisateur (ID_Utilisateur, Email, Mot_De_Passe, Image_Profil, Derniere_Connexion, ID_Privilege, ID_Personne) VALUES
(1, 'dorothee.fournier@gmail.com', '$2y$10$mYBC0cuPZ3nmYZWIyzQm4utrBBARtGL5FkFD6pa/OjZORj61C5Apy', 'defaut.png', '2023-09-15 10:43:22', 2, 2),
(2, 'matthias.fellon@gmail.com', '$2y$10$mYBC0cuPZ3nmYZWIyzQm4utrBBARtGL5FkFD6pa/OjZORj61C5Apy', 'defaut.png', '2023-06-02 11:50:42', 1, 1),
(3, 'jean.dupont@gmail.com', '$2y$10$Jpbrv3inJ7N8zplL0vttyuaoIvAu.NKE3p5f2Fsd20KClLsX/kPqC', 'defaut.png', '2023-11-21 22:02:15', 3, 3),
(4, 'sophie.martin@gmail.com', '$2y$10$mYBC0cuPZ3nmYZWIyzQm4utrBBARtGL5FkFD6pa/OjZORj61C5Apy', 'defaut.png', '2024-01-06 09:23:18', 3, NULL);


-- Table Chat
INSERT INTO Chat (ID_Chat, Nom, Nom_Usage, Race, Date_Naissance, Sexe, Couleur, Couleur_Yeux, Affixe_Naissance, Affixe_Actuel, Image, Puce_Electronique, Livre_Origine, ADN, Statut, Date_Adoption, Etat, ID_Chat_A_Pour_Mere, ID_Chat_A_Pour_Pere, ID_Personne) VALUES
(1, 'Pheize',       '',         'Persan', '2019-08-18', 'F', 'Black Silver Shaded',         'Vert', 'Des Fever-fell',           'Des Fever-fell',       'pheize.jpg',       '250268743142082', 'LOOF 2020.2130',    '', 'Adopté',   '', 'Actif',    NULL, NULL, 1),
(2, 'Q''Pidon',     'Phares',   'Persan', '2019-09-13', 'M', 'Blue Golden Shaded',          'Vert', 'Du Pid D''Arrouyette',     '',                     'phares.jpg',       '250268732525100', 'LOOF 2020.2261',    '', 'Adopté',   '', 'Actif',    NULL, NULL, 1),
(3, 'Thao''s',      '',         'Persan', '2022-06-05', 'M', 'Blue Golden Shaded',          'Vert', 'Des Fell De Chymé',        'Des Fell De Chymé',    'thao.jpg',         '250269590840460', 'LOOF 2022.36935',   '', 'Adopté',   '', 'Actif',    NULL, NULL, 1),
(4, 'Upsylone',     '',         'Persan', '2023-03-10', 'F', 'Black Tortue Golden Shaded',  '',     'Du Grand Nocq ',           '',                     'upsylone.jpg',     '250269591320957', 'LOOF 2023.46399',   '', 'Adopté',   '', 'Actif',    NULL, NULL, 1),
(5, 'Nostradamus',  '',         'Persan', '2017-10-24', 'M', 'Crème Tabby Point',           '',     'Des Beautés D''Isara',     '',                     'nostradamus.jpg',  '250269811440948', 'LOOF 2018.7964',    '', 'Adopté',   '', 'Décedé',   NULL, NULL, 1),
(6, 'Nydal',        'Nevenn',   'Persan', '2017-07-21', 'F', 'Blue Point',                  'Bleu', 'Des Émeraudes D''Isara',   '',                     'neven.jpg',        '250269811425251', 'LOOF 2017.33924',   '', 'Adopté',   '', 'Rétraité', NULL, NULL, 1),
(7, 'Jim',          'Jango',    'Persan', '2014-07-16', 'M', 'Black Silver Shaded',         '',     'Du Conte D''Artois',       '',                     'jango.jpg',        '250268731216727', 'LOOF 2014.2014',    '', 'Adopté',   '', 'Rétraité', NULL, NULL, 1),
(8, 'Ice-Flower',   'Ice',      'Persan', '2013-04-30', 'F', 'Black Silver Shaded',         'Vert', 'Du Doulieu',               '',                     'ice.jpg',          '250268500609607', 'LOOF 2013.26702',   '', 'Adopté',   '', 'Rétraité', NULL, NULL, 1);

-- Table Chat_Test
-- INSERT INTO Chat_Test (ID_Chat, ID_Test, Résultat) VALUES
-- (1, 1, 'resultat.jpg'),
-- (1, 2, 'resultat.jpg'),
-- (1, 3, 'resultat.jpg'),
-- (2, 1, 'resultat.jpg'),
-- (2, 3, 'resultat.jpg'),
-- (3, 1, 'resultat.jpg'),
-- (3, 2, 'resultat.jpg'),
-- (3, 4, 'resultat.jpg'),
-- (4, 1, 'resultat.jpg'),
-- (4, 2, 'resultat.jpg'),
-- (4, 3, 'resultat.jpg'),
-- (4, 4, 'resultat.jpg'),
-- (5, 1, 'resultat.jpg');

-- Table Chat_Vaccin
-- INSERT INTO Chat_Vaccin (ID_Chat, ID_Vaccin, Date_Administration) VALUES
-- (1, 1, '15-06-2019'),
-- (1, 2, '15-08-2019'),
-- (1, 3, '15-07-2019'),
-- (1, 4, '15-09-2019'),
-- (2, 1, '22-09-2019'),
-- (2, 3, '22-10-2019'),
-- (2, 2, '22-11-2019'),
-- (2, 4, '22-12-2019'),
-- (3, 1, '11-08-2020'),
-- (3, 2, '11-10-2020'),
-- (3, 3, '11-09-2020'),
-- (4, 1, '05-01-2020'),
-- (4, 2, '05-03-2020'),
-- (5, 1, '22-07-2021'),
-- (5, 2, '22-09-2021');

-- Table Chat_Titre
-- INSERT INTO Chat_Titre (ID_Chat, ID_Titre, Date) VALUES
-- (1, 1, '2022-05-01'),
-- (3, 2, '2023-01-15');

-- Table Chat_Image
INSERT INTO Chat_Image (ID_Chat, ID_Image) VALUES
(1, 1),
(1, 4),
(2, 2),
(3, 3),
(4, 5);


-- Table Test
INSERT INTO Test (ID_Test, Nom) VALUES
(1, 'FIV'),
(2, 'FeLV'),
(3, 'PKD'),
(4, 'Bilan Sanguin'),
(5, 'Identification Génétique'),
(6, 'PIF');

-- Table Vaccin
INSERT INTO Vaccin (ID_Vaccin, Nom) VALUES
(1, '1er Vaccin'),
(2, '2ème Vaccin'),
(3, 'Rappel 1er Vaccin'),
(4, 'Rappel 2ème Vaccin');

-- Table Titre
INSERT INTO Titre (ID_Titre, Nom) VALUES 
(1, 'Champion National'),
(2, 'Champion International');

-- Table Image
INSERT INTO Image (ID_Image, Nom) VALUES
(1, 'pheize.jpg'),
(2, 'phares.jpg'),
(3, 'thao.jpg'),
(4, 'pheize_2.jpg'),
(5, 'upsylone.jpg');


-- Mise à jour des données 
UPDATE chat SET ID_Chat_A_Pour_Mere = 6 WHERE ID_Chat = 1;
UPDATE chat SET ID_Chat_A_Pour_Pere = 2, ID_Chat_A_Pour_Mere = 1 WHERE ID_Chat = 3;
