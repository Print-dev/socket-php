CREATE DATABASE ventas;
USE ventas;

create table productos
(
	id	int	primary key auto_increment,
    nombre varchar(80) not null,
    tipo	varchar(50) not null,
    precio	decimal(7,2)	not null,
    fecharegistro	datetime	null default now(),
    CONSTRAINT uk_prod UNIQUE(nombre)
)ENGINE=INNODB;


select * from productos;