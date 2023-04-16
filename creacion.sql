create database tareas;
use tareas;
create Table tareas(
                         id_tarea INT AUTO_INCREMENT,
                         nombre VARCHAR(30) NOT NULL ,
                         CONSTRAINT palabras_pk PRIMARY KEY (id_tarea),
                         CONSTRAINT palabras_uk1 unique (nombre)
);

create user tareas@localhost
    identified by 'tareas1234';

GRANT SELECT,INSERT,UPDATE,DELETE ON tareas.* TO tareas@localhost;