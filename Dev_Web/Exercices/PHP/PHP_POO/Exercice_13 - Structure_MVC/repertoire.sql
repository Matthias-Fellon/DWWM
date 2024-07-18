-- Création de la base de données
DROP DATABASE IF EXISTS repertoire_2;
CREATE DATABASE IF NOT EXISTS repertoire_2;


-- Utilisation de la base de données
USE repertoire_2;


-- Création de la table Users
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(55) NOT NULL,
    prenom VARCHAR(55) NOT NULL,
    email VARCHAR(55) NOT NULL UNIQUE,
    telephone VARCHAR(20) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    nomImage VARCHAR(255),
    CONSTRAINT USERS_PK PRIMARY KEY(id),
    CONSTRAINT USERS_UK UNIQUE (email)
)ENGINE=InnoDB;

-- Création de la table UserRoles
CREATE TABLE userroles (
    user_id INT PRIMARY KEY,
    role VARCHAR(50) NOT NULL,
    CONSTRAINT USERS_FK FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)ENGINE=InnoDB;


-- Création des utilisateurs
INSERT INTO users (nom, prenom, email, telephone, pwd, nomImage) VALUES
(1, 'Dupont', 'Val', 'val.dupont@gmail.com', '0123456789', '$2y$10$mYBC0cuPZ3nmYZWIyzQm4utrBBARtGL5FkFD6pa/OjZORj61C5Apy',''),
(2, 'Duck', 'Donald', 'donald.duck@gmail.com', '0987654321', '$2y$10$Jpbrv3inJ7N8zplL0vttyuaoIvAu.NKE3p5f2Fsd20KClLsX/kPqC','');

-- Attribuer des rôles aux utilisateurs
INSERT INTO userRoles (user_id, role) VALUES
(1, 'admin'),
(2, 'non-admin');  