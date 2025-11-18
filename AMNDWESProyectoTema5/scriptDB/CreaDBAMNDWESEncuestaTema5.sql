/**
 * Author:  alberto.mennun
 * Created: 17 nov. 2025
 */

create database if not exists DBAMNDWESProyectoTema5;

use DBAMNDWESProyectoTema5;

create table if not exists T02_Departamento(
    T02_CodDepartamento varchar(3) primary key,
    T02_DescDepartamento varchar(255),
    T02_FechaCreacionDepartamento datetime,
    T02_VolumenNegocio float,
    T02_FechaBajaDepartamento datetime)engine=innodb;

create table if not exists T01_Usuario(
    T01_CodUsuario VARCHAR(20) PRIMARY KEY,
    T01_Password VARCHAR(255) NOT NULL ,
    T01_DescUsuario VARCHAR(255),
    T01_NumConexiones INT NOT NULL DEFAULT 0,
    T01_FechaHoraUltimaConexion DATETIME,
    T01_Perfil VARCHAR(25) default 'usuario',
    T01_ImagenUsuario VARCHAR(255))engine=innodb;

create user if not exists 'userAMNDWESProyectoTema5'@'%' identified by "paso";
grant all privileges on *.* to "userAMNDWESProyectoTema5"@"%" with grant option;
flush privileges;
