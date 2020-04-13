DROP DATABASE IF EXISTS BunnyCorpDatabase;
CREATE DATABASE BunnyCorpDatabase;
USE BunnyCorpDatabase;

CREATE TABLE  `users` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 100 ) NOT NULL ,
`password` VARCHAR( 100 ) NOT NULL
);

ALTER TABLE users AUTO_INCREMENT=1000;

INSERT INTO users (username,password) VALUES ("admin","password");
INSERT INTO users (username,password) VALUES ("student","test");
INSERT INTO users (username,password) VALUES ("adamSmith","capitalism");
INSERT INTO users (username,password) VALUES ("me-me_bigboy","memes");

SHOW TABLES;
DESCRIBE users;
SELECT * FROM users LIMIT 10;
