-- Crea la base de datos
CREATE DATABASE Escuela;

-- Selecciona la base de datos
USE Escuela;

-- Crea la tabla Alumnos
CREATE TABLE Alumnos (
    id SMALLINT UNSIGNED AUTO_INCREMENT,  
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    email VARCHAR(100) UNIQUE,
    CONSTRAINT pk_alumno PRIMARY KEY (id)
);

