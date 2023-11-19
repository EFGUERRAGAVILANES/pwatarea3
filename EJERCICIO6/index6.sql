CREATE DATABASE IF NOT EXISTS Ejercicio 6 Guerra Erick;

USE Ejercicio 6 Guerra Erick;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);
