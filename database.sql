CREATE DATABASE IF NOT EXISTS recursa_p;
USE recursa_p;

DROP TABLE IF EXISTS pedidos;
DROP TABLE IF EXISTS productos;
DROP TABLE IF EXISTS usuarios;
DROP TABLE IF EXISTS vendedores;

CREATE TABLE vendedores (
  id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
  nombre_vendedor VARCHAR(80) NOT NULL,
  apellido_vendedor VARCHAR(50) NOT NULL,
  telefono_vendedor BIGINT(13) NOT NULL UNIQUE,
  correo_vendedor VARCHAR(120) NOT NULL UNIQUE,
  edad_vendedor INT(3) NOT NULL
);

CREATE TABLE usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre_usuario VARCHAR(80) NOT NULL,
  apellido_usuario VARCHAR(50) NOT NULL,
  telefono_usuario BIGINT(13) NOT NULL UNIQUE,
  edad_usuario INT(3) NOT NULL,
  correo_usuario VARCHAR(120) NOT NULL UNIQUE
);

CREATE TABLE productos (
  id_producto INT AUTO_INCREMENT PRIMARY KEY,
  id_vendedor INT,
  nombre_producto VARCHAR(50) NOT NULL,
  categoria_producto VARCHAR(50) NOT NULL,
  precio_producto FLOAT NOT NULL,
  FOREIGN KEY (id_vendedor) REFERENCES vendedores(id_vendedor)
);

CREATE TABLE pedidos (
  id_pedido INT AUTO_INCREMENT PRIMARY KEY,
  id_producto INT,
  id_usuario INT,
  id_vendedor INT,
  fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
  FOREIGN KEY (id_vendedor) REFERENCES vendedores(id_vendedor)
);

INSERT INTO vendedores (nombre_vendedor, apellido_vendedor, telefono_vendedor, correo_vendedor, edad_vendedor) VALUES
('Elena', 'Rojas', 5551002200, 'elena@aromamarket.mx', 32),
('Marco', 'Nava', 5553334455, 'marco@aromamarket.mx', 29);

INSERT INTO usuarios (nombre_usuario, apellido_usuario, telefono_usuario, edad_usuario, correo_usuario) VALUES
('Cliente', 'Demo', 5559991010, 21, 'cliente@demo.com');

INSERT INTO productos (id_vendedor, nombre_producto, categoria_producto, precio_producto) VALUES
(1, 'Cafe 500g', 'Cafe', 185),
(2, 'Croissants', 'Panaderia', 210),
(1, 'Kit barista', 'Regalos', 420);

INSERT INTO pedidos (id_producto, id_usuario, id_vendedor) VALUES
(1, 1, 1);
