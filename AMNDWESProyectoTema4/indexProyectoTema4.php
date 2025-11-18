<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CFGS - Desarrollo de Aplicaciones Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: #F59C27;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        footer{
            margin: auto;
            background-color: #F59C27;
            text-align: center;
            height: 150px;
	    color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
	main{
	text-align:center;
	justify-content:center;
	}
        a{
            text-decoration: none;
            color:purple;
        }
        
        table{
            border-collapse: collapse;
            width: 100%;
            border-width: 4px;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
        }
        
        #encabezado{
            background-color: lightsteelblue;
            font-weight: bold;
        }
        
        .codigos{
            background-color: lightblue;
        }
        
        .mostrar{
            background-color: lightsalmon;
        }
        
        tr{
            height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <h1><b>Índice Proyecto Tema 4</b></h1>
	<h3><a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a></h3>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>CONTENIDO</b></h2>
       
        <h4><a href="mostrarCodigo/mostrarCreacion.php">Script de creación</a></h4>
        <h4><a href="mostrarCodigo/mostrarInsert.php">Script de inserción inicial</a></h4>
        <h4><a href="mostrarCodigo/mostrarBorrado.php">Script de borrado</a></h4>
        
        <table border solid black 2px>
            <tr id="encabezado">
                <td style="width: 100px;">NÚMERO EJERCICIO</td>
                <td style="width: 500px;">ENUNCIADO</td>
                <td style="width: 150px;">PDO</td>
                <td style="width: 150px;">MySQLi</td>
            </tr>
            
            <tr>
                <td>1</td>
                <td>(ProyectoTema4) Conexión a la base de datos con la cuenta usuario y tratamiento de errores.
                    Utilizar excepciones automáticas siempre que sea posible en todos los ejercicios.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio1.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio1.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>2</td>
                <td>Mostrar el contenido de la tabla Departamento y el número de registros.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio2.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio2.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>3</td>
                <td>Formulario para añadir un departamento a la tabla Departamento con validación de entrada y
                control de errores.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio3.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio3.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>4</td>
                <td>Formulario de búsqueda de departamentos por descripción (por una parte del campo
                DescDepartamento, si el usuario no pone nada deben aparecer todos los departamentos).
                </td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio4.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio4.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                            
                <td>5</td>
                <td> Pagina web que añade tres registros a nuestra tabla Departamento utilizando tres instrucciones
                    insert y una transacción, de tal forma que se añadan los tres registros o no se añada ninguno.
                    </td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio5.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio5.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>6</td>
                <td>Pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos
                utilizando una consulta preparada. (Después de programar y entender este ejercicio, modificar los
                ejercicios anteriores para que utilicen consultas preparadas). Probar consultas preparadas sin bind,
                pasando los parámetros en un array a execute.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio6.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio6.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>7</td>
                <td>Página web que toma datos (código y descripción) de un fichero xml y los añade a la tabla
                Departamento de nuestra base de datos. (IMPORTAR). El fichero importado se encuentra en el
                directorio .../tmp/ del servidor.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio7.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio7.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
                        <tr>
                <td>8</td>
                <td>Página web que toma datos (código y descripción) de la tabla Departamento y guarda en un
                fichero departamento.xml. (COPIA DE SEGURIDAD / EXPORTAR). El fichero exportado se
                encuentra en el directorio .../tmp/ del servidor.
                Si el alumno dispone de tiempo probar distintos formatos de importación - exportación: XML, JSON, CSV, TXT,...
                Si el alumno dispone de tiempo probar a exportar e importar a o desde un directorio (a elegir) en el equipo cliente.
                Si el alumno dispone de tiempo probar importación parcial con log de errores.</td>
                <td class="codigos">
                    <p><a href="codigoPHP/ejercicio8.php">Ejecutar</a></p>
                    <p><a href="mostrarCodigo/mostrarEjercicio8.php">Mostrar</a></p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
            <tr>
                <td>9</td>
                <td>Aplicación resumen MtoDeDepartamentosTema4. (Incluir PHPDoc y versionado en el repositorio
                GIT)
                </td>
                <td class="codigos">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
            
            <tr>
                <td>10</td>
                <td>Aplicación resumen MtoDeDepartamentos POO y multicapa.
                </td>
                <td class="codigos">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
                <td class="mostrar">
                    <p>Ejecutar</p>
                    <p>Mostrar</p>
                </td>
            </tr>
             
        </table>
    </main>
</body>
</html>

