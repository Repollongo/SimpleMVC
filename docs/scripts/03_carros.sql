CREATE TABLE carros(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nombre VARCHAR(255),
    marca VARCHAR(255) NOT NULL,
    estado CHAR(3)
) COMMENT 'tabla de carros de la flota de ventas';