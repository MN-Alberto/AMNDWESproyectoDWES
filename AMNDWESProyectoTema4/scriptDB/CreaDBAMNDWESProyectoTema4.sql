/*
Fecha de creación: 30-10-2025
Autor: Alberto Méndez Núñez
Descripción: Script de creación de la base de datos DBAMNDWESProyectoTema4
    y su tabla T02_Departamento, también la creación y los permisos del usuario
    que va a administrar la base de datos.
*/

create database if not exists DBAMNDWESProyectoTema4;

use DBAMNDWESProyectoTema4;

create table if not exists T02_Departamento(
T02_CodDepartamento varchar(3) primary key,
T02_DescDepartamento varchar(255),
T02_FechaCreacionDepartamento datetime,
T02_VolumenNegocio float,
T02_FechaBajaDepartamento datetime
);

create user if not exists "userAMNDWESProyectoTema4"@"%" identified by "paso";
grant all privileges on *.* to "userAMNDWESProyectoTema4"@"%" with grant option;
flush privileges;