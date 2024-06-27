#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Animal
#------------------------------------------------------------

CREATE TABLE Animal(
        ID_Animal      Int  Auto_increment  NOT NULL ,
        Nom            Varchar (50) ,
        Date_Naissance Date ,
        Sexe           Char (1) ,
        Image_Bebe     Blob ,
        Image_Adulte   Blob
	,CONSTRAINT Animal_PK PRIMARY KEY (ID_Animal)

    ,CONSTRAINT Animal_Personne0_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
    ,CONSTRAINT Animal_Espece1_FK FOREIGN KEY (ID_Espece) REFERENCES Espece(ID_Espece)
    ,CONSTRAINT Animal_Espece0_AK UNIQUE (ID_Espece)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: A_Pour_Mere
#------------------------------------------------------------

CREATE TABLE A_Pour_Mere(
        ID_Animal             Int NOT NULL ,
        ID_Animal_A_Pour_Mere Int NOT NULL
	,CONSTRAINT A_Pour_Mere_PK PRIMARY KEY (ID_Animal,ID_Animal_A_Pour_Mere)

	,CONSTRAINT A_Pour_Mere_Animal_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
	,CONSTRAINT A_Pour_Mere_Animal0_FK FOREIGN KEY (ID_Animal_A_Pour_Mere) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: A_Pour_Pere
#------------------------------------------------------------

CREATE TABLE A_Pour_Pere(
        ID_Animal             Int NOT NULL ,
        ID_Animal_A_Pour_Pere Int NOT NULL
	,CONSTRAINT A_Pour_Pere_PK PRIMARY KEY (ID_Animal,ID_Animal_A_Pour_Pere)

	,CONSTRAINT A_Pour_Pere_Animal_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
	,CONSTRAINT A_Pour_Pere_Animal0_FK FOREIGN KEY (ID_Animal_A_Pour_Pere) REFERENCES Animal(ID_Animal)
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
# Table: Animal_Vaccin
#------------------------------------------------------------

CREATE TABLE Animal_Vaccin(
        ID_Vaccin           Int NOT NULL ,
        ID_Animal           Int NOT NULL ,
        Date_Administration Date NOT NULL
	,CONSTRAINT Animal_Vaccin_PK PRIMARY KEY (ID_Vaccin,ID_Animal)

	,CONSTRAINT Animal_Vaccin_Vaccin_FK FOREIGN KEY (ID_Vaccin) REFERENCES Vaccin(ID_Vaccin)
	,CONSTRAINT Animal_Vaccin_Animal0_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Portee
#------------------------------------------------------------

CREATE TABLE Portee(
        ID_Portee      Int  Auto_increment  NOT NULL ,
        Date_Naissance Date NOT NULL ,
        Nombre_Chatons Int NOT NULL
	,CONSTRAINT Portee_PK PRIMARY KEY (ID_Portee)
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
# Table: Espece
#------------------------------------------------------------

CREATE TABLE Espece(
        ID_Espece Int  Auto_increment  NOT NULL ,
        Nom       Varchar (50) NOT NULL ,
        ID_Animal Int
	,CONSTRAINT Espece_PK PRIMARY KEY (ID_Espece)

    ,CONSTRAINT Espece_Animal0_FK FOREIGN KEY (ID_Animal) REFERENCES Animal(ID_Animal)
    ,CONSTRAINT Espece_Animal0_AK UNIQUE (ID_Animal)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Race
#------------------------------------------------------------

CREATE TABLE Race(
        ID_Race     Int NOT NULL ,
        Nom         Varchar (50) NOT NULL ,
        Description Text ,
        ID_Espece   Int NOT NULL
	,CONSTRAINT Race_PK PRIMARY KEY (ID_Race)

    ,CONSTRAINT Race_Espece0_FK FOREIGN KEY (ID_Espece) REFERENCES Espece(ID_Espece)    
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Race_Portee
#------------------------------------------------------------

CREATE TABLE Race_Portee(
        ID_Portee Int NOT NULL ,
        ID_Race   Int NOT NULL
	,CONSTRAINT Race_Portee_PK PRIMARY KEY (ID_Portee,ID_Race)
    
    ,CONSTRAINT Race_Portee_Portee0_FK FOREIGN KEY (ID_Portee) REFERENCES Portee(ID_Portee)
    ,CONSTRAINT Race_Portee_Race1_FK FOREIGN KEY (ID_Race) REFERENCES Race(ID_Race)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Eleveur
#------------------------------------------------------------

CREATE TABLE Eleveur(
        ID_Personne  Int NOT NULL ,
        Nom_Elevage  Varchar (50) NOT NULL ,
        Numero_Siret Numeric ,
        Description  Text ,
        Nom          Varchar (50) ,
        Prenom       Varchar (50) ,
        Adresse      Varchar (150) ,
        Telephone    Numeric ,
        Email        Varchar (150)
	,CONSTRAINT Eleveur_PK PRIMARY KEY (ID_Personne)

	,CONSTRAINT Eleveur_Personne_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Adoptant
#------------------------------------------------------------

CREATE TABLE Adoptant(
        ID_Personne   Int NOT NULL ,
        Date_Adoption Date NOT NULL ,
        Nom           Varchar (50) ,
        Prenom        Varchar (50) ,
        Adresse       Varchar (150) ,
        Telephone     Numeric ,
        Email         Varchar (150)
	,CONSTRAINT Adoptant_PK PRIMARY KEY (ID_Personne)

	,CONSTRAINT Adoptant_Personne_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
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
)ENGINE=InnoDB;


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

	,CONSTRAINT Utilisateur_Personne_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
	,CONSTRAINT Utilisateur_Privilege0_FK FOREIGN KEY (ID_Privilege) REFERENCES Privilege(ID_Privilege)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Personne_Role
#------------------------------------------------------------

CREATE TABLE Personne_Role(
        ID_Role     Int NOT NULL ,
        ID_Personne Int NOT NULL
	,CONSTRAINT Personne_Role_PK PRIMARY KEY (ID_Role,ID_Personne)

	,CONSTRAINT Personne_Role_Role_FK FOREIGN KEY (ID_Role) REFERENCES Role(ID_Role)
	,CONSTRAINT Personne_Role_Personne0_FK FOREIGN KEY (ID_Personne) REFERENCES Personne(ID_Personne)
)ENGINE=InnoDB;

