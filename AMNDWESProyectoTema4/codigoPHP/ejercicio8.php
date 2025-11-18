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
            max-width: 1200px;
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
            border: 0;
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
        
        input{
            border-radius: 5px;
        }
        
        #boton{
            border-radius: 5px;
            width: 150px;
            background-color: lightgreen;
        }
        
        label{
            font-weight: bold;
        }
        
        h3{
            text-decoration: underline;
        }
        
        #formulario table{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
        <h2><b>Ejercicio 8</b></h2>
        
        <?php
        
                /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 13/11/2025
         * Página web que toma datos (código y descripción) de la tabla Departamento y guarda en un fichero departamento.xml.
         * (COPIA DE SEGURIDAD / EXPORTAR). El fichero exportado se encuentra en el directorio .../tmp/ del servidor. 
         */
                require_once '../config/confDBPDO.php';
                
                 
                try {
                    $miDB = new PDO(RUTA, USUARIO, PASS);
                    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $query='select T02_CodDepartamento,T02_DescDepartamento from T02_Departamento';
                    
                    $consPreparada=$miDB->prepare($query);
                    $consPreparada->execute();
                    
                    $aObjResultados=$consPreparada->fetchAll(PDO::FETCH_OBJ);
                       
                    $stringJson= json_encode($aObjResultados,JSON_PRETTY_PRINT);
                    
                    file_put_contents("../tmp/departamentosJson.json", $stringJson);
                    
                    echo "<h2>Los departamentos han sido exportados con exito, compruebe la carpeta tmp en busca del archivo</h2>";
                    
                } catch (PDOException $ex) {
                    echo "Error de conexión a la base de datos: " . $ex->getMessage() . "<br>";
                    echo "Código de error: " . $ex->getCode(); 
                } finally {
                    unset($miDB);
                } 
                
                ?>
    </main>
</body>
</html>