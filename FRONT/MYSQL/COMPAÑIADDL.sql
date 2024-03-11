create database Compañia;
use Compañia;
create table Articulos(
Codigo int (5) zerofill Auto_Increment primary key ,/*zerofill Auto_Increment se incrementa desde 1*/
Nombre varchar(45) not null,
Descripcion varchar(100)not null,
Precio float(10)not null,
Cantidad int(100)
);
/*drop table Articulos;*/
