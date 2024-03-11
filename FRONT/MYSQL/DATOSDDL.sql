/*Crear base de datos*/
create database Datos;
/*Seleccionar la base de datos*/
use Datos;
/*Creacion de tablas */
create table Usuario(
CC int primary Key,
Nombre varchar(45)not null,
Email varchar(100)not null,
Telefono BIGINT NOT NULL
);
