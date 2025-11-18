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
        <h1><b>UT4: TÉCNICAS DE ACCESO A DATOS EN PHP</b></h1>
        <h4><a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a></h4>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 1</b></h2>
        
        <?php
        
                /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 30/10/2025
         * (ProyectoTema4) Conexión a la base de datos con la cuenta usuario y tratamiento de errores.
            Utilizar excepciones automáticas siempre que sea posible en todos los ejercicios.
         */
        
        require_once '../config/confDBPDO.php';
        
        $aAtributos=array(
            'ATTR_AUTOCOMMIT',
            'ATTR_CASE',
            'ATTR_CLIENT_VERSION',
            'ATTR_CONNECTION_STATUS',
            'ATTR_DRIVER_NAME',
            'ATTR_ERRMODE',
            'ATTR_ORACLE_NULLS',
            'ATTR_PERSISTENT',
            'ATTR_SERVER_INFO',
            'ATTR_SERVER_VERSION',
            'ATTR_DEFAULT_FETCH_MODE'
        );
        
        try{
            $miDB=new PDO(ruta,usuario,pass);
            
                echo "<h2>Conexión completada correctamente</h2>";
                echo "<h4>Atributos de la conexión:</h4>";
            
                foreach ($aAtributos as $atributo){
                    print "<b>Atributo '$atributo': </b>".$miDB->getAttribute(constant("PDO::$atributo"))."<br>";
                }
                
        }catch(PDOException $ex){
            echo "Error de conexión a la base de datos: ".$ex->getMessage();
            echo "Codigo de error: ".$ex->getCode();
        }
        
        
        
        
        echo "<h2>Conexión erronea por error al encontrar el driver</h2>";
        const ruta2='error:host=10.199.9.104;dbname=DBAMNDWESProyectoTema4';
        const usuario2='userAMNDWESProyectoTema4';
        const pass2='paso';
        try{
            $miDB=new PDO(ruta2,usuario2,pass2);
            
                echo "<h2>Conexión completada correctamente</h2>";
                echo "<h4>Atributos de la conexión:</h4>";
            
                foreach ($aAtributos as $atributo){
                    print "<b>Atributo '$atributo': </b>".$miDB->getAttribute(constant("PDO::$atributo"))."<br>";
                }
            

        } catch (Exception $ex) {
            echo "Error ".$ex->getMessage()."<br><br>";
            echo "Codigo de error: ".$ex->getCode();
        }
        
        
        echo "<h2>Conexión erronea por contraseña incorrecta</h2>";
        const ruta3='mysql:host=10.199.9.104;dbname=DBAMNDWESProyectoTema4';
        const usuario3='userAMNDWESProyectoTema4';
        const pass3='gdfsghsdfg';
        try{

            $miDB=new PDO(ruta3,usuario3,pass3);
            
                        
                echo "<h2>Conexión completada correctamente</h2>";
                echo "<h4>Atributos de la conexión:</h4>";
            
                foreach ($aAtributos as $atributo){
                    print "<b>Atributo '$atributo': </b>".$miDB->getAttribute(constant("PDO::$atributo"))."<br>";
                }
           
        }
        catch(PDOException $ex){
            echo "Password incorrecto: ".$ex->getMessage();
            echo "Codigo de error: ".$ex->getCode();
        }
        
        unset($miDB);
        ?>
        
    </main>
</body>
</html>