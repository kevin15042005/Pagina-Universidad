create database KevinRS;
use KevinRS;

create table Cliente(
Codcliente int primary key,
Nit bigint not null, 
Nombre varchar(45)not null, 
Telefono bigint not null,
Direccion varchar(45)not null,
Correo varchar (200)not null,
Compras varchar(200)not null,
NoTransacciones int not null,
CanalPreferido varchar(200)not null,
Empresa varchar (200) not  null
);
select *from Cliente;

create table Factura(
NoFactura bigint primary key,
Fecha date not null,
Codcliente int not null ,
foreign key(Codcliente)references Cliente(Codcliente),
TotalFacturar int not null,
Caducidad date not null,
DireccionEmitida varchar(200)not null,
MetodoPago varchar(200)not null,
Iva int not null,
Referencias varchar(200)not null
);
select *from Factura;

create table Proveedor1(
CodProvedor int  primary key ,
Nit int not null,
ProveedorN varchar(45) not null,
Telefono bigint not null,
Direccion varchar(45)not null,
NombreProv varchar(200)not null,
ContactoEmrg int not null,
ContactoFamiliar int not null,
Horarios date not null,
Sugerencias varchar(200)
);

create table Producto(
CodProducto int primary key ,
Descripcion varchar (200)not null,
CodProvedor int not null,
foreign key (CodProvedor)references Proveedor1(CodProvedor),
PrecioCosto int not null,
Preventa int not null,
Estado varchar(200) not null,
Cantidadreq int not null,
Tamaño varchar(45) not null,
FechaVenc varchar(200) not null,
Adiciones varchar (200) not null
);

create table Detalles_de_Factura (
id  int primary key,
Fecha date not null,
NoFactura bigint not null,
CodProducto int not null,
foreign key (NoFactura)references Factura(Nofactura),
foreign key(CodProducto)references Producto(CodProducto),
CantidadPedida int not null,
PrecioTotal int not null,
UnidadesAsig int not null,
SaldoAnterior float not null,
SaldoActual float not null,
Puntos int not null
);

