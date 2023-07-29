-- Active: 1685108602987@@127.0.0.1@3306@campus
CREATE DATABASE campus;
use campus;
CREATE TABLE campers(  
    id INT primary key AUTO_INCREMENT,
    NOMBRES VARCHAR (50) NOT NULL,
    direccion VARCHAR (50),
    logros VARCHAR (50),
    ingles VARCHAR(50),
    skills VARCHAR(50),
    ser VARCHAR(50),
    review VARCHAR(50),
    especialidad VARCHAR(50)
);

DROP TABLE campers;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCamper INT NOT NULL,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(60) NOT NULL,
    password VARCHAR(50) NOT NULL,
    FOREIGN KEY (idCamper) REFERENCES campers(id)
)