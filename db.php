CREATE TABLE etiquetas(
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(50)
);

CREATE TABLE tarea_etiqueta(
 tarea_id INT,
 etiqueta_id INT
);

CREATE TABLE historial_tareas(
 id INT AUTO_INCREMENT PRIMARY KEY,
 tarea_id INT,
 usuario VARCHAR(50),
 cambio TEXT,
 fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
