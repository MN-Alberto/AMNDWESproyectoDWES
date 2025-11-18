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
        <h2><b>Ejercicio 0</b></h2>
        
        <?php
        
                /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 17/11/2025
         * Mostrar el contenido de las variables superglobales y phpinfo().
         */
        
        echo '<h2>Contenido de las variables globales $_SERVER, $_COOKIE, $_SESSION, $_REQUEST, $_GET, $_POST, $_FILES, $_ENV</h2>';
        
        
        echo '<h3>Contenido de la variable $_SERVER</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_SERVER)) {
                foreach ($_SERVER as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_SERVER[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_COOKIE</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_COOKIE)) {
                foreach ($_COOKIE as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_COOKIE[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_COOKIE está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_SESSION</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_SESSION)) {
                foreach ($_SESSION as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_SESSION[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_REQUEST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_REQUEST)) {
                foreach ($_REQUEST as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_REQUEST[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_REQUEST está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_GET</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_GET)) {
                foreach ($_GET as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_GET[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_GET está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_POST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_POST)) {
                foreach ($_POST as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_POST[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_POST está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_FILES</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_FILES)) {
                foreach ($_FILES as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_FILES[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_FILES está vacía.</em></td></tr>";
            }
        echo "</table>";
        
        
        echo '<h3>Contenido de la variable $_ENV</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
            if (!empty($_ENV)) {
                foreach ($_ENV as $variable => $resultado) {
                    echo "<tr>";
                    echo '<td>$_ENV[' . $variable . ']</td>';
                    echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'><em>La variable \$_ENV está vacía.</em></td></tr>";
            }
        echo "</table>";
        ?>

        <iframe src='../doc/phpinfo.php' style="width:100%; height:600px; border:none; margin-top:100px;"></iframe>
    </main>
</body>
</html>