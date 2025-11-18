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
        <h2><b>Ejercicio 4</b></h2>
        
        <?php
        
                /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 13/11/2025
         * Formulario de búsqueda de departamentos por descripción (por una parte del campo DescDepartamento,
         * si el usuario no pone nada deben aparecer todos los departamentos).
         */
                require_once 'libreriaValidacionFormulario.php';
                require_once '../config/confDBPDO.php';

                try {
                    $miDB = new PDO(RUTA, USUARIO, PASS);
                    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $ex) {
                    echo "Error de conexión a la base de datos: " . $ex->getMessage() . "<br>";
                    echo "Código de error: " . $ex->getCode();
                    exit;
                }

                $aErrores = [
                    "T02_DescDepartamento" => ""
                ];

                $aRespuesta = [
                    "T02_DescDepartamento" => ""
                ];

                $entradaOK = true;

                if (isset($_REQUEST['buscar'])) {

                    $T02_DescDepartamento = $_REQUEST['T02_DescDepartamento'] ?? '';

                    $aErrores['T02_DescDepartamento'] = validacionFormularios::comprobarAlfabetico($T02_DescDepartamento, 255, 0, 1);

                    foreach ($aErrores as $valor) {
                        if (!empty($valor)) {
                            $entradaOK = false;
                        }
                    }

                    
                    if ($entradaOK) {
                        $aRespuesta["T02_DescDepartamento"]=($_REQUEST["T02_DescDepartamento"]);
                    }
                }

                if (!isset($_REQUEST['submit']) || !$entradaOK) {
                    ?>
                    <div id="formulario">
                        <h1 style="text-align:center;">Buscar departamento por descripción</h1>
                    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
                        <table>
                            <tr>
                                <td><label for="T02_DescDepartamento">Descripción:</label></td>
                        <td><input type="text" name="T02_DescDepartamento" id="T02_DescDepartamento"
                               value="<?= (empty($aErrores['T02_DescDepartamento'])) ? ($_REQUEST['T02_DescDepartamento'] ?? '') : ''; ?>"/></td>
                        
                        <td><input type="submit" value="Buscar" name="buscar"></td>
                            </tr>
                        
                        <br><br>
                    </form>
                    </div>
                    <?php
                }

                try {
                    if(empty($aRespuesta["T02_DescDepartamento"])){
                   
                        $query = "SELECT * FROM T02_Departamento";
                    }
                    else{
                    $RespuestasSql="%".$aRespuesta["T02_DescDepartamento"]."%";
                        
                        $query= "select * from T02_Departamento where T02_DescDepartamento like '$RespuestasSql'";
                    }
                    
                    $resultadoConsulta= $miDB->query($query);
                    
                    echo '<table border 1px>';
                    echo '<tr style=background-color:lightblue;>';
                    echo '<th> Código </th>';
                    echo '<th> Desccripción </th>';
                    echo '<th> Fecha Creación </th>';
                    echo '<th> Volumen Negocio </th>';
                    echo '<th> Fecha Baja </th>';
                    echo '</tr>';
                    
                    while($aRegistroArray=$resultadoConsulta->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                        echo "<td>".$aRegistroArray["T02_CodDepartamento"]."</td>";
                        echo "<td>".$aRegistroArray["T02_DescDepartamento"]."</td>";
                        
                        
                        $fechaCreacion=new DateTime($aRegistroArray["T02_FechaCreacionDepartamento"]);
                        echo "<td>".$fechaCreacion->format("d-m-Y")."</td>";
                        
                        echo "<td>".number_format($aRegistroArray["T02_VolumenNegocio"],2,',','.').'€</td>';
                        if(!is_null($aRegistroArray["T02_FechaBajaDepartamento"])){
                            $fechaBaja=new DateTime($aRegistroArray["T02_FechaBajaDepartamento"]);
                            echo "<td>".$fechaBaja->format("d-m-Y")."</td>";
                        }
                        else{
                            echo "<td></td>";
                        }
                        echo "</tr>";
                    }
                    
                    $numReg=$miDB->query("select count(*) from T02_Departamento");
                    
                    $totalReg=$numReg->fetchColumn();
                    
                    echo "Total de registros: ".$totalReg;
                    
                    } catch (PDOException $ex) {
                    echo '<p>Error en la base de datos:</p> ';
                    echo $ex->getMessage() . '<br>Código: ';
                    echo $ex->getCode();
                } finally {
                    unset($miDB);
                }
                ?>
    </main>
</body>
</html>