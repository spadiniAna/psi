CREATE DATABASE michele;

USE michele;

CREATE TABLE user(
    id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    nivel VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE blog(
    id INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    subtitulo VARCHAR(100) NOT NULL,
    texto TEXT NOT NULL,
    img VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE pag(
    id INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    texto TEXT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE img(
    id INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    texto TEXT NOT NULL,
    img VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE vid(
    id INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    texto TEXT NOT NULL,
    vid VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)