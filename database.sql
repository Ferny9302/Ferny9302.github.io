create database playcode;

use playcode;

drop table if exists users;
create table users (
id INTEGER not null auto_increment,
nombre char (25),
ap char (25),
email varchar (50),
password varchar (100),
level tinyint,
primary key (id)
)

drop table if exists categorias;
create table categorias(
id INTEGER not null auto_increment,
nombre varchar (30),
img varchar (30),
primary key (id)
)

drop table if exists productos;
create table productos (
id INTEGER not null auto_increment,
nombre char (25),
precio DECIMAL,
descripcion varchar (50),
img varchar (40),
id_categorias int,
primary key (id)
)

drop table if exists proveedores;
create table proveedores(
id INTEGER not null auto_increment,
nombre varchar (25),
telefono varchar (20),
producto varchar (40),
fecha_pedido date,
pago decimal,
primary key (id)
)

drop table if exists pedidos;
create table pedidos(
id INTEGER not null auto_increment,
cantidad int,
total decimal,
id_usuarios int,
primary key (id)
)

select * from users

delete from users where id = 1;
insert into users (nombre,ap,email,password,level) 
values ('bryan','palma','palma@hotmail.com','123',1);
insert into users (nombre,ap,email,password,level) 
values ('fer','palma','fer@hotmail.com','1234',2);
insert into users (nombre,ap,email,password,level) 
values ('joselin','cera','joselin@hotmail.com','123',1);

select * from users order by id desc

insert into productos 
values (0,'rol',250.00,'desripcion','control3.png',1)

insert into categorias
values (0,'gamcube control','control1.jpg')

update proveedores set 
nombre='fernando',
telefono='636-128-4504',
producto='switch controller',
fecha_pedido='2024/12/09',
pago=6000.00
where id = 1;


select * from categorias;

select * from proveedores;

insert into proveedores  (nombre,telefono,producto,fecha_pedido,pago) 
values ('bryan','636-128-4704','Gammecube controller','2024/11/22',5000.00);