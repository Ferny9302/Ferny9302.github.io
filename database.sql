create database playcode;

use playcode;

create table users (
id INTEGER not null auto_increment,
nombre char (25),
ap char (25),
email varchar (50),
password varchar (100),
level tinyint,
primary key (id)
)

select * from users

delete from users where id = 1;
insert into users (nombre,ap,email,password,level) 
values ('bryan','palma','palma@hotmail.com','123',1);
insert into users (nombre,ap,email,password,level) 
values ('fer','palma','fer@hotmail.com','1234',2);