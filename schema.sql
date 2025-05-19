CREATE DATABASE mvtc;

USE mvtc;


CREATE TABLE mvtc.students(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    gender ENUM("Male", "Female") NOT NULL,
    DOB date    NOT NULL,
    phoneNumber VARCHAR(13) NULL,

    PRIMARY KEY(id)
);

CREATE TABLE mvtc.teacher(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR NOT NULL,
    PNo INT NOT NULL,
    gender ENUM("Male", "Female") NOT NULL,
    phoneNumber VARCHAR(13) NOT NULL,

    PRIMARY KEY(id)
);


CREATE TABLE mvtc.class(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    time VARCHAR(5) NOT NULL,
    creationDate date,

    PRIMARY KEY(id)
);