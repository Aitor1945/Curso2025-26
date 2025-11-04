CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    rol VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (usuario, pass, rol) VALUES
('admin', '1234', 'admin'),
('pepe', '4321', 'client');
