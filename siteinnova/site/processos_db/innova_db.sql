CREATE DATABASE IF NOT EXISTS innova_db;
USE innova_db;

CREATE TABLE IF NOT EXISTS usuario(
nome VARCHAR(60) NOT NULL,
email VARCHAR(45) NOT NULL,
senha VARCHAR(65) NOT NULL);

CREATE TABLE IF NOT EXISTS mensagem_suporte(
nome VARCHAR(60) NOT NULL,
email varchar(45) NOT NULL,
assunto varchar(30),
mensagem VARCHAR(600));