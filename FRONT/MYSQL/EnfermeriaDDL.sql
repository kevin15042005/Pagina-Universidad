create database  Enfermeria;
use Enfermeria ;
create table medicamentos(
codigo int auto_increment primary key,
nombre varchar(20),
laboratorio varchar(20),
precio decimal (5.2) unsigned,
cantidad int unsigned
);
