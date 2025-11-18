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
        <h1><b>Índice Proyecto Tema 5</b></h1>
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
                <td>NÚMERO EJERCICIO</td>
                <td>ENUNCIADO</td>
                <td>EJECUTAR CÓDIGO</td>
                <td>MOSTRAR CÓDIGO</td>
            </tr>
            
             <tr>
                <td>0</td>
                <td>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                <td class="codigos"><a href="codigoPHP/ejercicio0.php">Ejecutar</a></td>
                <td class="mostrar"><a href="mostrarCodigo/mostrarEjercicio0.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>1</td>
                <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header().</td>
                <td class="codigos"><a href="codigoPHP/ejercicio1.php">Ejecutar</a></td>
                <td class="mostrar"><a href="mostrarCodigo/mostrarEjercicio1.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</td>
                <td class="codigos"><a href="codigoPHP/ejercicio1.php">Ejecutar</a></td>
                <td class="mostrar"><a href="mostrarCodigo/mostrarEjercicio1.php">Ver código</a></td>
            </tr>
    </main>
</body>
</html>