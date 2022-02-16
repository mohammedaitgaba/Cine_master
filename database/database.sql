CREATE DATABASE cine_master ;

CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(255) PRIMARY KEY NOT NULL ,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL
);
CREATE TABLE  IF NOT EXISTS posts (
	id int PRIMARY KEY AUTO_INCREMENT,
    createur VARCHAR(255),
    title VARCHAR (255),
    description VARCHAR (255),
    photo VARCHAR (255),
    categorie VARCHAR (255),
    FOREIGN KEY(createur)REFERENCES users(username)
);
CREATE TABLE  IF NOT EXISTS commentaire (
	id int PRIMARY KEY AUTO_INCREMENT,
    comment_createur VARCHAR(255),
    post_id int,
    corp VARCHAR(255),
    FOREIGN KEY(comment_createur)REFERENCES users(username),
    FOREIGN KEY(post_id)REFERENCES posts(id)
);