-- 1. Crear la base de datos (si no la creaste ya)
CREATE DATABASE IF NOT EXISTS edureports CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE edureports;

-- 2. Tabla de Profesores (Usuarios)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Guardaremos el hash, no el texto plano
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Tabla de Alumnos
CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE,
    curso VARCHAR(20) NOT NULL, -- Ejemplo: "1º Primaria", "P5"
    id_profesor INT, -- Para que cada profe vea solo sus alumnos
    FOREIGN KEY (id_profesor) REFERENCES usuarios(id) ON DELETE SET NULL
);

-- 4. Tabla de Informes
CREATE TABLE IF NOT EXISTS informes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT NOT NULL,
    id_profesor INT NOT NULL,
    fecha_informe DATE NOT NULL,
    trimestre ENUM('1', '2', '3') NOT NULL,
    contenido TEXT NOT NULL, -- Aquí irá el cuerpo del informe
    observaciones TEXT,
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id) ON DELETE CASCADE,
    FOREIGN KEY (id_profesor) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- 5. Insertar datos de prueba para que no esté vacío
INSERT INTO usuarios (nombre, email, password) VALUES 
('Profe Miquel', 'miquel@escuela.com', '$2y$10$abcdefghijklmnopqrstuv'); -- Password de ejemplo

INSERT INTO alumnos (nombre, apellidos, fecha_nacimiento, curso, id_profesor) VALUES 
('Marc', 'García Pérez', '2018-05-15', '1º Primaria', 1),
('Lucía', 'Fernández Sanz', '2019-02-20', 'P5', 1);

INSERT INTO informes (id_alumno, id_profesor, fecha_informe, trimestre, contenido) VALUES 
(1, 1, '2024-02-02', '1', 'El alumno progresa adecuadamente en lectura y cálculo.');