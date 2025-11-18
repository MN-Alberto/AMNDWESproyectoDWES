<?php
        
                /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 17/11/2025
         * Desarrollo de un control de acceso con identificación del usuario basado en la función header().
         */
        
        // Array para almacenar los usuarios con su contraseña cifrada.
            $usuarios=[
              "userAlberto"=>[hash('sha256', 'paso'),"Alberto Mendez"],
              "heraclio"=>[hash('sha256', 'paso'),"Heraclio"]
            ];
            
            
            if(!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])){
                header('WWW-Authenticate: Basic realm="No autorizado"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }
            
            $user=$_SERVER['PHP_AUTH_USER'];
            $password=$_SERVER['PHP_AUTH_PW'];
            
            if(!array_key_exists($user, $usuarios) || $usuarios[$user][0] !== hash('sha256',$password)){
                header('WWW-Authenticate: Basic realm="No autorizado"');
                header('HTTP/1.0 401 Unauthorized');
                echo "Usuario o contraseña incorrecto";
                exit;
            }
        ?>

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
            margin: 0 auto;
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
            height: 40px;
        }
        
        tr:nth-child(1){
            background-color: lightblue;
        }
        
        table{
            width: 800px;
        }
        
        td{
            border: 1px solid black;
        }

    </style>
</head>
<body>
    <header>
        <h1><b>UT5: DESARROLLO DE APLICACIONES WEB</b></h1>
        <h4><a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a></h4>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 2</b></h2>
        
       
        
        <h2>Usuario <?php echo $usuarios[$user][1] ?> conectado correctamente.</h2>
    </main>
</body>
</html>