CREATE DATABASE projeto;
USE projeto;
create table register (
	id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(25) NOT NULL,
    pwd VARCHAR(20) NOT NULL
);
