CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    email varchar(255) not null, 
    password varchar(255) not null, 
    createdAt datetime not null default NOW(),
    CONSTRAINT USER_PK PRIMARY KEY (id)
    )ENGINE=InnoDB;
