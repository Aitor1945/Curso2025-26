CREATE DATABASE IF NOT EXISTS login_db;
USE login_db;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    rol VARCHAR(50) NOT NULL
);

-- Usuario administrador inicial
INSERT INTO usuarios (nombre, contrasena, rol)
VALUES ('admin', MD5('1234'), 'Administrador');
