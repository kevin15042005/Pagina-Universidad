/*Relacion uno a Muchos */
create database Relaciones;
use Relaciones; 

create table Categorias(
id_categoria int primary key auto_increment,
nombre_categoria varchar(45) not null
);

create table Productos(
id_productos int primary key auto_increment,
nombre_producto varchar(45)not null,
precio_producto bigint not null,
id_categoria int not null,
foreign key (id_categoria) references Categorias(id_categoria)
);
drop table Categorias;