-- Active: 1731050526921@@127.0.0.1@3306@olimpo
drop database if exists olimpo;

create database olimpo;

use olimpo;



create table jugadores (
    id_jugador int auto_increment,
    nombre varchar(100) not null,
    partidos_jugados int not null,
    goles int not null,
    asistencia int not null,
    ganados int not null,
    perdidos int not null,
    empatados int not null,
    puntaje float as(ganados * 1 + goles * 1 + asistencia * 0.25 + empatados * 0.50) stored,
    primary key (id_jugador)    
);

