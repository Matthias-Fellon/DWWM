#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Portee
#------------------------------------------------------------

CREATE TABLE Portee(
        ID_Portee      Int  Auto_increment  NOT NULL ,
        Date_Naissance Date ,
        Nombre_Chatons Int
	,CONSTRAINT Portee_PK PRIMARY KEY (ID_Portee)
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
# Table: Test
#------------------------------------------------------------

CREATE TABLE Test(
        ID_Test                  Int  Auto_increment  NOT NULL ,
        PKD                      Blob ,
        FIV                      Blob ,
        FELV                     Blob ,
        Identification_Genetique Blob
	,CONSTRAINT Test_PK PRIMARY KEY (ID_Test)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne
#------------------------------------------------------------

CREATE TABLE Personne(
        ID_Personne Int  Auto_increment  NOT NULL ,
        Nom         Varchar (50) ,
        Prenom      Varchar (50) ,
        Adresse     Varchar (150) ,
        Telephone   Numeric ,
        Email       Varchar (150)
	,CONSTRAINT Personne_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleveur
#------------------------------------------------------------

CREATE TABLE Eleveur(
        ID_Personne  Int NOT NULL ,
        Nom_Elevage  Varchar (50) ,
        Numero_Siret Numeric ,
        Description  Text ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Numeric ,
        Email        Varchar (150)
	,CONSTRAINT Eleveur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adoptant
#------------------------------------------------------------

CREATE TABLE Adoptant(
        ID_Personne   Int NOT NULL ,
        Date_Adoption Date ,
        Nom           Varchar (50) ,
        Prenom        Varchar (50) ,
        Adresse       Varchar (150) ,
        Telephone     Numeric ,
        Email         Varchar (150)
	,CONSTRAINT Adoptant_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE Role(
        ID_Role Int  Auto_increment  NOT NULL ,
        Nom     Varchar (50) NOT NULL
	,CONSTRAINT Role_PK PRIMARY KEY (ID_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Privilege
#------------------------------------------------------------

CREATE TABLE Privilege(
        ID_Privilege Int  Auto_increment  NOT NULL ,
        Nom          Varchar (50) NOT NULL
	,CONSTRAINT Privilege_PK PRIMARY KEY (ID_Privilege)
)ENGINE=InnoDB COMMENT "SuperAdministrateur Administrateur Utilisateur" ;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        ID_Personne  Int NOT NULL ,
        Mot_De_Passe Varchar (255) NOT NULL ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Numeric ,
        Email        Varchar (150) ,
        ID_Privilege Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeFourrureRace
#------------------------------------------------------------

CREATE TABLE TypeFourrureRace(
        ID_TypeFourrureRace Int NOT NULL ,
        Nom                 Varchar (50) NOT NULL
	,CONSTRAINT TypeFourrureRace_PK PRIMARY KEY (ID_TypeFourrureRace)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurFourrureRace
#------------------------------------------------------------

CREATE TABLE CouleurFourrureRace(
        ID_CouleurFourrureRace Int NOT NULL ,
        Nom                    Varchar (50) NOT NULL
	,CONSTRAINT CouleurFourrureRace_PK PRIMARY KEY (ID_CouleurFourrureRace)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurYeuxRace
#------------------------------------------------------------

CREATE TABLE CouleurYeuxRace(
        ID_CouleurYeuxRace Int NOT NULL ,
        Nom                Varchar (50) NOT NULL
	,CONSTRAINT CouleurYeuxRace_PK PRIMARY KEY (ID_CouleurYeuxRace)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurCoussinetRace
#------------------------------------------------------------

CREATE TABLE CouleurCoussinetRace(
        ID_CouleurCoussinetRace Int NOT NULL ,
        Nom                     Varchar (50) NOT NULL
	,CONSTRAINT CouleurCoussinetRace_PK PRIMARY KEY (ID_CouleurCoussinetRace)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeFourrure
#------------------------------------------------------------

CREATE TABLE TypeFourrure(
        ID_TypeFourrure     Int NOT NULL ,
        Nom                 Varchar (50) NOT NULL ,
        ID_TypeFourrureRace Int NOT NULL
	,CONSTRAINT TypeFourrure_PK PRIMARY KEY (ID_TypeFourrure)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurFourrure
#------------------------------------------------------------

CREATE TABLE CouleurFourrure(
        ID_CouleurFourrure     Int NOT NULL ,
        Nom                    Varchar (50) NOT NULL ,
        ID_CouleurFourrureRace Int NOT NULL
	,CONSTRAINT CouleurFourrure_PK PRIMARY KEY (ID_CouleurFourrure)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurYeux
#------------------------------------------------------------

CREATE TABLE CouleurYeux(
        ID_CouleurYeux     Int NOT NULL ,
        Nom                Varchar (50) NOT NULL ,
        ID_CouleurYeuxRace Int NOT NULL
	,CONSTRAINT CouleurYeux_PK PRIMARY KEY (ID_CouleurYeux)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CouleurCoussinet
#------------------------------------------------------------

CREATE TABLE CouleurCoussinet(
        ID_CouleurCoussinet     Int NOT NULL ,
        Nom                     Varchar (50) NOT NULL ,
        ID_CouleurCoussinetRace Int NOT NULL
	,CONSTRAINT CouleurCoussinet_PK PRIMARY KEY (ID_CouleurCoussinet)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne_Role
#------------------------------------------------------------

CREATE TABLE Personne_Role(
        ID_Personne Int NOT NULL ,
        ID_Role     Int NOT NULL
	,CONSTRAINT Personne_Role_PK PRIMARY KEY (ID_Personne,ID_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal
#------------------------------------------------------------

CREATE TABLE Animal(
        ID_Animal             Int  Auto_increment  NOT NULL ,
        Nom                   Varchar (50) ,
        Date_Naissance        Date ,
        Sexe                  Char (1) ,
        Image_Bebe            Blob ,
        Image_Adulte          Blob ,
        Date_Adoption         Date NOT NULL ,
        ID_Test               Int ,
        ID_Animal_A_Pour_Mere Int ,
        ID_Animal_A_Pour_Pere Int ,
        ID_Personne           Int NOT NULL
	,CONSTRAINT Animal_PK PRIMARY KEY (ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Espece
#------------------------------------------------------------

CREATE TABLE Espece(
        ID_Espece Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL ,
        ID_Animal Int NOT NULL
	,CONSTRAINT Espece_PK PRIMARY KEY (ID_Espece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Race
#------------------------------------------------------------

CREATE TABLE Race(
        ID_Race                 Int NOT NULL ,
        Nom                     Varchar (50) NOT NULL ,
        Description             Text NOT NULL ,
        ID_Espece               Int NOT NULL ,
        ID_TypeFourrureRace     Int NOT NULL ,
        ID_CouleurCoussinetRace Int NOT NULL ,
        ID_CouleurFourrureRace  Int NOT NULL ,
        ID_CouleurYeuxRace      Int NOT NULL
	,CONSTRAINT Race_PK PRIMARY KEY (ID_Race)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Animal_Vaccin
#------------------------------------------------------------

CREATE TABLE Animal_Vaccin(
        ID_Vaccin           Int NOT NULL ,
        ID_Animal           Int NOT NULL ,
        Date_Administration Date NOT NULL
	,CONSTRAINT Animal_Vaccin_PK PRIMARY KEY (ID_Vaccin,ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Race_Portee
#------------------------------------------------------------

CREATE TABLE Race_Portee(
        ID_Portee Int NOT NULL ,
        ID_Race   Int NOT NULL
	,CONSTRAINT Race_Portee_PK PRIMARY KEY (ID_Portee,ID_Race)
)ENGINE=InnoDB;




ALTER TABLE Eleveur
	ADD CONSTRAINT Eleveur_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Adoptant
	ADD CONSTRAINT Adoptant_Personne0_FK
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

ALTER TABLE TypeFourrure
	ADD CONSTRAINT TypeFourrure_TypeFourrureRace0_FK
	FOREIGN KEY (ID_TypeFourrureRace)
	REFERENCES TypeFourrureRace(ID_TypeFourrureRace);

ALTER TABLE CouleurFourrure
	ADD CONSTRAINT CouleurFourrure_CouleurFourrureRace0_FK
	FOREIGN KEY (ID_CouleurFourrureRace)
	REFERENCES CouleurFourrureRace(ID_CouleurFourrureRace);

ALTER TABLE CouleurYeux
	ADD CONSTRAINT CouleurYeux_CouleurYeuxRace0_FK
	FOREIGN KEY (ID_CouleurYeuxRace)
	REFERENCES CouleurYeuxRace(ID_CouleurYeuxRace);

ALTER TABLE CouleurCoussinet
	ADD CONSTRAINT CouleurCoussinet_CouleurCoussinetRace0_FK
	FOREIGN KEY (ID_CouleurCoussinetRace)
	REFERENCES CouleurCoussinetRace(ID_CouleurCoussinetRace);

ALTER TABLE Personne_Role
	ADD CONSTRAINT Personne_Role_Personne0_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Personne_Role
	ADD CONSTRAINT Personne_Role_Role1_FK
	FOREIGN KEY (ID_Role)
	REFERENCES Role(ID_Role);

ALTER TABLE Animal
	ADD CONSTRAINT Animal_Test0_FK
	FOREIGN KEY (ID_Test)
	REFERENCES Test(ID_Test);

ALTER TABLE Animal
	ADD CONSTRAINT Animal_Animal1_FK
	FOREIGN KEY (ID_Animal_A_Pour_Mere)
	REFERENCES Animal(ID_Animal);

ALTER TABLE Animal
	ADD CONSTRAINT Animal_Animal2_FK
	FOREIGN KEY (ID_Animal_A_Pour_Pere)
	REFERENCES Animal(ID_Animal);

ALTER TABLE Animal
	ADD CONSTRAINT Animal_Personne3_FK
	FOREIGN KEY (ID_Personne)
	REFERENCES Personne(ID_Personne);

ALTER TABLE Espece
	ADD CONSTRAINT Espece_Animal0_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Animal(ID_Animal);

ALTER TABLE Race
	ADD CONSTRAINT Race_Espece0_FK
	FOREIGN KEY (ID_Espece)
	REFERENCES Espece(ID_Espece);

ALTER TABLE Race
	ADD CONSTRAINT Race_TypeFourrureRace1_FK
	FOREIGN KEY (ID_TypeFourrureRace)
	REFERENCES TypeFourrureRace(ID_TypeFourrureRace);

ALTER TABLE Race
	ADD CONSTRAINT Race_CouleurCoussinetRace2_FK
	FOREIGN KEY (ID_CouleurCoussinetRace)
	REFERENCES CouleurCoussinetRace(ID_CouleurCoussinetRace);

ALTER TABLE Race
	ADD CONSTRAINT Race_CouleurFourrureRace3_FK
	FOREIGN KEY (ID_CouleurFourrureRace)
	REFERENCES CouleurFourrureRace(ID_CouleurFourrureRace);

ALTER TABLE Race
	ADD CONSTRAINT Race_CouleurYeuxRace4_FK
	FOREIGN KEY (ID_CouleurYeuxRace)
	REFERENCES CouleurYeuxRace(ID_CouleurYeuxRace);

ALTER TABLE Animal_Vaccin
	ADD CONSTRAINT Animal_Vaccin_Vaccin0_FK
	FOREIGN KEY (ID_Vaccin)
	REFERENCES Vaccin(ID_Vaccin);

ALTER TABLE Animal_Vaccin
	ADD CONSTRAINT Animal_Vaccin_Animal1_FK
	FOREIGN KEY (ID_Animal)
	REFERENCES Animal(ID_Animal);

ALTER TABLE Race_Portee
	ADD CONSTRAINT Race_Portee_Portee0_FK
	FOREIGN KEY (ID_Portee)
	REFERENCES Portee(ID_Portee);

ALTER TABLE Race_Portee
	ADD CONSTRAINT Race_Portee_Race1_FK
	FOREIGN KEY (ID_Race)
	REFERENCES Race(ID_Race);
