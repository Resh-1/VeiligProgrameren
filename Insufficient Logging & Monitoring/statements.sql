CREATE DATABASE IF NOT EXISTS brokenauth;
use brokenauth;

CREATE TABLE user(
id int NOT NULL auto_increment primary key ,
email varchar(25) NOT NULL,
password varchar(25) NOT NULL
);


