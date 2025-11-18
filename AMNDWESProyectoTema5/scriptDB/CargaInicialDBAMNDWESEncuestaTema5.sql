/**
 * Author:  alberto.mennun
 * Created: 17 nov. 2025
 */

use DBAMNDWESProyectoTema5;

insert into DBAMNDWESProyectoTema5.T01_Usuario (T01_CodUsuario,T01_Password,T01_DescUsuario,T01_ImagenUsuario) values
        ('userAlberto',SHA2('paso',256),'Alberto Mendez',null),
        ('heraclio',SHA2('paso',256),'Cuenta de usuario para Heraclio',null),
        ('amor',SHA2('paso',256),'Cuenta de usuario para Amor',null),
        ('alberto',SHA2('paso',256),'Cuenta de usuario para Alberto',null),
        ('antonio',SHA2('paso',256),'Cuenta de usuario para antonio',null),
        ('gisela',SHA2('paso',256),'Cuenta de usuario para Gisela',null),
        ('jorge',SHA2('paso',256),'Cuenta de usuario para Jorge',null);


insert into DBAMNDWESProyectoTema5.T02_Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenNegocio,T02_FechaBajaDepartamento) values
        ('INF','Departamento de informatica.',now(),1235.5,null),
        ('AUT','Departamento de automocion.',now(),5235.8,null),
        ('ELE','Departamento de electricidad.',now(),2275.1,null),
        ('MAT','Departamento de matematicas.',now(),735.2,null),
        ('ING','Departamento de ingles.',now(),235.9,now());