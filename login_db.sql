create database login_db;
use login_db;

create table usuarios (
    id int primary key not null  auto_increment,
    senha varchar(45) not null,
    nome varchar(45) not null
);