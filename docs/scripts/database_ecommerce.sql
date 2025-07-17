

CREATE TABLE IF NOT EXISTS productos (
    ProductoId INT AUTO_INCREMENT PRIMARY KEY,
    ProductoNombre VARCHAR(100) NOT NULL,
    ProductoDescripcion TEXT,
    ProductoImg VARCHAR(255),
    ProductoPrecio DECIMAL(10,2) NOT NULL,
    FechaAlta TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS ofertas (
    OfertaId INT AUTO_INCREMENT PRIMARY KEY,
    ProductoId INT NOT NULL,
    Descuento DECIMAL(5,2) DEFAULT 0,
    FechaInicio DATE,
    FechaFin DATE,
    FOREIGN KEY (ProductoId) REFERENCES productos(ProductoId) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS destacados (
    DestacadoId INT AUTO_INCREMENT PRIMARY KEY,
    ProductoId INT NOT NULL,
    FechaDestacado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ProductoId) REFERENCES productos(ProductoId) ON DELETE CASCADE
);

CREATE USER IF NOT EXISTS 'ecommerce'@'%' IDENTIFIED BY 'ecommerce';

GRANT SELECT, INSERT, UPDATE, DELETE ON ecommerce.* TO 'ecommerce'@'%';

FLUSH PRIVILEGES;