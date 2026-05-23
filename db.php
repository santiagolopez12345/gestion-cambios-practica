CREATE TABLE etiquetas(
 id INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(50)
);

CREATE TABLE tarea_etiqueta(
 tarea_id INT,
 etiqueta_id INT
);
