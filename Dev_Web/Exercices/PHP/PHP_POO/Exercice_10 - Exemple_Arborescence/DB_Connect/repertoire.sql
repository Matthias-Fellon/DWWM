-- Création de la base de données
DROP DATABASE IF EXISTS repertoire;
CREATE DATABASE IF NOT EXISTS repertoire;

-- Utilisation de la base de données
USE repertoire;

-- Création de la table Users
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(55) NOT NULL,
    prenom VARCHAR(55) NOT NULL,
    email VARCHAR(55) NOT NULL UNIQUE,
    telephone VARCHAR(20) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    CONSTRAINT USERS_PK PRIMARY KEY(id)
)ENGINE=InnoDB;

-- Création de la table UserRoles
CREATE TABLE userroles (
    user_id INT PRIMARY KEY,
    role VARCHAR(50) NOT NULL,
    CONSTRAINT USERS_FK FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)ENGINE=InnoDB;



INSERT INTO users (nom, prenom, email, telephone, pwd) VALUES ('Dupont', 'Val', 'val.dupont@gmail.com', '0123456789','password1');
INSERT INTO users (nom, prenom, email, telephone, pwd) VALUES ('Duck', 'Donald', 'donald.duck@gmail.com', '0987654321','password2');

-- Attribuer des rôles aux utilisateurs
INSERT INTO userRoles (user_id, role) VALUES (1, 'admin');  
INSERT INTO userRoles (user_id, role) VALUES (2, 'non-admin');  
