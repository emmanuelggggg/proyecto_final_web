drop database if exists phpData;
create database phpData;
use phpData;

create table users(id int not null primary key auto_increment,
nombre varchar(45),
p_apellido varchar(45),
s_apellido varchar(45),
fecha_nacimiento date,
correo varchar(45) unique,
contraseña varchar(300),
roll int);

create table denuncias(
id int primary key not null auto_increment,
nombre varchar(45),
correo varchar(45),
titulo varchar(45),
descripcion varchar(1000),
fecha datetime,
latitud float,
longitud float,
estado varchar(45)
);


select * from users;
select * from denuncias;
SELECT nombre,correo,titulo,descripcion,fecha,latitud,longitud from denuncias where estado='Atendiendo' or estado='Aceptado';
DELIMITER $$
create procedure registrar(
nombre varchar(45),
p_apellido varchar(45),
s_apellido varchar(45),
fecha_nacimiento date,
correo varchar(45),
contraseña varchar(300),
roll int)

begin
	declare contra varchar(100);
	set contra=(sha2(contraseña,256));
	INSERT INTO users(nombre,p_apellido,s_apellido,fecha_nacimiento,correo,contraseña,roll) VALUES (nombre,p_apellido,s_apellido,fecha_nacimiento,correo,contra,roll);
end $$
DELIMITER 