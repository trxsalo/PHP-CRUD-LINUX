CREATE database dbCrud;

use dbCrud



CREATE TABLE estudiantes(
id smallint PRIMARY KEY auto_increment,
nombre varchar(50) not null,
apellido varchar(50) NOT NULL
);

INSERT INTO estudiantes(nombre,apellido)
VALUES("SALOMON", "LORAS ARAUZ");

SELECT * FROM estudiantes;

DROP TABLE estudiantes;