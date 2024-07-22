#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

-- Création de la base de données
DROP DATABASE IF EXISTS Chatterie;
CREATE DATABASE IF NOT EXISTS Chatterie;

-- Utilisation de la base de données
USE Chatterie;


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        ID_Personne Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) NOT NULL ,
        Prenom      Varchar (50) NOT NULL ,
        Telephone   Varchar (15) NOT NULL ,
        Email       Varchar (150) NOT NULL ,
        Image_Profil Varchar (50) NOT NULL
	,CONSTRAINT Personne_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleveur
#------------------------------------------------------------

CREATE TABLE Eleveur(
        ID_Personne  Int NOT NULL ,
        Nom_Elevage  Varchar (50) NOT NULL ,
        Numero_Siret Varchar (30) ,
        Description  Text NOT NULL ,
        Nom          Varchar (50) NOT NULL ,
        Prenom       Varchar (50) NOT NULL ,
        Telephone    Varchar (15) NOT NULL ,
        Email        Varchar (150) NOT NULL ,
        Image_Profil Varchar (50) NOT NULL
	,CONSTRAINT Eleveur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_Personne  Int NOT NULL ,
        Mot_De_Passe Varchar (255) NOT NULL ,
        Nom          Varchar (50) NOT NULL ,
        Prenom       Varchar (50) NOT NULL ,
        Telephone    Varchar (15) NOT NULL ,
        Email        Varchar (150) NOT NULL ,
        Image_Profil Varchar (50) NOT NULL ,
        ID_Privilege Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Privilege
#------------------------------------------------------------

CREATE TABLE Privilege(
        ID_Privilege Int  Auto_increment  NOT NULL ,
        Role         Varchar (50) NOT NULL
	,CONSTRAINT Privilege_PK PRIMARY KEY (ID_Privilege)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat
#------------------------------------------------------------

CREATE TABLE Chat(
        ID_Chat             Int  Auto_increment  NOT NULL ,
        Nom                 Varchar (50) NOT NULL ,
        Nom_Usage           Varchar (50) NOT NULL ,
        Race                Varchar (50) NOT NULL ,
        Date_Naissance      Date ,
        Sexe                Char (1) NOT NULL ,
        Couleur             Varchar (50) NOT NULL ,
        Couleur_Yeux        Varchar (50) NOT NULL ,
        Affixe_Naissance    Varchar (50) NOT NULL ,
        Affixe_Actuel       Varchar (50) NOT NULL ,
        Image               Varchar (50) NOT NULL ,
        Puce_Electronique   Varchar (30) NOT NULL ,
        Livre_Origine       Varchar (30) NOT NULL ,
        ADN                 Varchar (30) NOT NULL ,
        Statut              Varchar (30) NOT NULL ,
        Date_Adoption       Date ,
        Etat                Varchar (30) NOT NULL ,
        ID_Chat_A_Pour_Mere Int ,
        ID_Chat_A_Pour_Pere Int ,
        ID_Personne         Int 
	,CONSTRAINT Chat_PK PRIMARY KEY (ID_Chat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Test
#------------------------------------------------------------

CREATE TABLE Chat_Test(
        ID_Test  Int NOT NULL ,
        ID_Chat  Int NOT NULL ,
        Resultat Varchar (50) NOT NULL
	,CONSTRAINT Chat_Test_PK PRIMARY KEY (ID_Test,ID_Chat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Vaccin
#------------------------------------------------------------

CREATE TABLE Chat_Vaccin(
        ID_Vaccin           Int NOT NULL ,
        ID_Chat             Int NOT NULL ,
        Date_Administration Date NOT NULL
	,CONSTRAINT Chat_Vaccin_PK PRIMARY KEY (ID_Vaccin,ID_Chat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Titre
#------------------------------------------------------------

CREATE TABLE Chat_Titre(
        ID_Titre Int NOT NULL ,
        ID_Chat  Int NOT NULL ,
        Date     Date NOT NULL
	,CONSTRAINT Chat_Titre_PK PRIMARY KEY (ID_Titre,ID_Chat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chat_Image
#------------------------------------------------------------

CREATE TABLE Chat_Image(
        ID_Image Int NOT NULL ,
        ID_Chat  Int NOT NULL ,
        Image    Varchar (50) NOT NULL
	,CONSTRAINT Chat_Image_PK PRIMARY KEY (ID_Image,ID_Chat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Test
#------------------------------------------------------------

CREATE TABLE Test(
        ID_Test Int  Auto_increment  NOT NULL ,
        Nom     Varchar (50) NOT NULL
	,CONSTRAINT Test_PK PRIMARY KEY (ID_Test)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Vaccin
#------------------------------------------------------------

CREATE TABLE Vaccin(
        ID_Vaccin Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL
	,CONSTRAINT Vaccin_PK PRIMARY KEY (ID_Vaccin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Titre
#------------------------------------------------------------

CREATE TABLE Titre(
        ID_Titre Int  Auto_increment  NOT NULL ,
        Nom      Varchar (30) NOT NULL
	,CONSTRAINT Titre_PK PRIMARY KEY (ID_Titre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Image
#------------------------------------------------------------

CREATE TABLE Image(
        ID_Image Int  Auto_increment  NOT NULL
	,CONSTRAINT Image_PK PRIMARY KEY (ID_Image)
)ENGINE=InnoDB;





ALTER TABLE Eleveur
	ADD CONSTRAINT Eleveur_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Utilisateur
	ADD CONSTRAINT Utilisateur_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Utilisateur
	ADD CONSTRAINT Utilisateur_Privilege1_FK
	FOREIGN KEY (ID_Privilege)
	REFERENCES Privilege(ID_Privilege);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Chat0_FK
	FOREIGN KEY (ID_Chat_A_Pour_Mere)
	REFERENCES Chat(ID_Chat);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Chat1_FK
	FOREIGN KEY (ID_Chat_A_Pour_Pere)
	REFERENCES Chat(ID_Chat);

ALTER TABLE Chat
	ADD CONSTRAINT Chat_Personne2_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Chat_Test
	ADD CONSTRAINT Chat_Test_Test0_FK
	FOREIGN KEY (ID_Test)
	REFERENCES Test(ID_Test);

ALTER TABLE Chat_Test
	ADD CONSTRAINT Chat_Test_Chat1_FK
	FOREIGN KEY (ID_Chat)
	REFERENCES Chat(ID_Chat);

ALTER TABLE Chat_Vaccin
	ADD CONSTRAINT Chat_Vaccin_Vaccin0_FK
	FOREIGN KEY (ID_Vaccin)
	REFERENCES Vaccin(ID_Vaccin);

ALTER TABLE Chat_Vaccin
	ADD CONSTRAINT Chat_Vaccin_Chat1_FK
	FOREIGN KEY (ID_Chat)
	REFERENCES Chat(ID_Chat);

ALTER TABLE Chat_Titre
	ADD CONSTRAINT Chat_Titre_Titre0_FK
	FOREIGN KEY (ID_Titre)
	REFERENCES Titre(ID_Titre);

ALTER TABLE Chat_Titre
	ADD CONSTRAINT Chat_Titre_Chat1_FK
	FOREIGN KEY (ID_Chat)
	REFERENCES Chat(ID_Chat);

ALTER TABLE Chat_Image
	ADD CONSTRAINT Chat_Image_Image0_FK
	FOREIGN KEY (ID_Image)
	REFERENCES Image(ID_Image);

ALTER TABLE Chat_Image
	ADD CONSTRAINT Chat_Image_Chat1_FK
	FOREIGN KEY (ID_Chat)
	REFERENCES Chat(ID_Chat);
