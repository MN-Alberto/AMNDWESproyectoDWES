/*
Fecha de creación: 30-10-2025
Autor: Alberto Méndez Núñez
Descripción: Script de inserción inicial a la base de datos DBAMNDWESProyectoTema4.
*/

use DBAMNDWESProyectoTema4;

insert into T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio,T02_FechaBajaDepartamento) values
        ('INF','Departamento de informatica.',now(),1235.5,null),
        ('AUT','Departamento de automocion.',now(),5235.8,null),
        ('ELE','Departamento de electricidad.',now(),2275.1,null),
        ('MAT','Departamento de matematicas.',now(),735.2,null),
        ('ING','Departamento de ingles.',now(),235.9,now());