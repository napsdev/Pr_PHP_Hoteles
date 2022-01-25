-- Database: hotel_decameron

DROP DATABASE IF EXISTS hotel_decameron;

CREATE DATABASE hotel_decameron
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Colombia.1252'
    LC_CTYPE = 'Spanish_Colombia.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
	CREATE TABLE hoteles(
	id serial primary key,
	nombre varchar(50) NOT NULL,
	ciudad varchar(50),
	direccion varchar(100),
	nit varchar(15),
	n_habitaciones int
	);
	
	ALTER TABLE hoteles
   	ADD CONSTRAINT UQ_nombre
   	UNIQUE(nombre);
	
	CREATE TABLE habitaciones(
	id serial primary key,
	id_hotel int,
	tipo_habitacion varchar(50) NOT NULL
	);
	
	ALTER TABLE habitaciones
  	ADD CONSTRAINT FK_hotel
  	FOREIGN KEY (id_hotel)
  	REFERENCES hoteles (id);