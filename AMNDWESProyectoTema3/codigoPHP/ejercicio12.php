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
        align-items: center;
	}
        a{
            text-decoration: none;
            color:purple;
        }
        
        table{
            border-collapse: collapse;
            border-width: 4px;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
            border-color: black;
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
            height: 20px;
        }

    </style>
</head>
<body>
    <header>
        <h1><b>UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</b></h1>
        <a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 12</b></h2>
        
        <?php
        /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 10/10/2025
         * 
         */


                echo '<h3>Contenido de la variable $_SERVER</h3><br>';
                echo "<table border 2px>";
                echo "<tr style='background-color:salmon;'><th>Variable</th><th>Valor</th></tr>";
                if (!empty($_SERVER)) {
                    foreach ($_SERVER as $variable => $resultado) {
                        echo "<tr'>";
                        echo '<td style="background-color:lightblue;">$_SERVER[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>La variable \$_SERVER está vacía.</td></tr>";
                }
                echo "</table>";


                        echo '<br><br><h3>Contenido de la variable $_GET</h3><br>';
                        echo '<table>';
                        echo '<tr><th>Variable</th><th>Valor</th></tr>';
                        if (!empty($_GET)) {
                            foreach ($_GET as $variable => $resultado) {
                                echo "<tr>";
                                echo '<td>$_GET[' . $variable . ']</td>';
                                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                                echo "</tr><br><br>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>La variable \$_GET está vacía.</td></tr>";
                        }
                        echo "</table>";


                        echo '<br><br><h3>Contenido de la variable $_POST</h3><br>';
                        echo '<table>';
                        echo '<tr><th>Variable</th><th>Valor</th></tr>';
                        if (!empty($_POST)) {
                            foreach ($_POST as $variable => $resultado) {
                                echo "<tr>";
                                echo '<td>$_POST[' . $variable . ']</td>';
                                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>La variable \$_POST está vacía.</td></tr>";
                        }
                        echo "</table>";


                    echo '<br><br><h3>Contenido de la variable $_FILES</h3><br>';
                    echo '<table>';
                    echo '<tr><th>Variable</th><th>Valor</th></tr>';
                    if (!empty($_FILES)) {
                        foreach ($_FILES as $variable => $resultado) {
                            echo "<tr>";
                            echo '<td>$_FILES[' . $variable . ']</td>';
                            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>La variable \$_FILES está vacía.</td></tr>";
                    }
                    echo "</table>";


                echo '<br><br><h3>Contenido de la variable $_COOKIE</h3><br>';
                echo '<table>';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_COOKIE)) {
                    foreach ($_COOKIE as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_COOKIE[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>La variable \$_COOKIE está vacía.</td></tr>";
                }
                echo "</table>";


                        echo '<br><br><h3>Contenido de la variable $_SESSION</h3><br>';
                        echo '<table>';
                        echo '<tr><th>Variable</th><th>Valor</th></tr>';
                        if (!empty($_SESSION)) {
                            foreach ($_SESSION as $variable => $resultado) {
                                echo "<tr>";
                                echo '<td>$_SESSION[' . $variable . ']</td>';
                                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>La variable \$_SESSION está vacía.</td></tr>";
                        }
                        echo "</table>";

                
                
                    echo '<br><br><h3>Contenido de la variable $_REQUEST</h3><br>';
                    echo '<table>';
                    echo '<tr><th>Variable</th><th>Valor</th></tr>';
                    if (!empty($_REQUEST)) {
                        foreach ($_REQUEST as $variable => $resultado) {
                            echo "<tr>";
                            echo '<td>$_REQUEST[' . $variable . ']</td>';
                            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                            echo "</tr><br><br>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>La variable \$_REQUEST está vacía.</td></tr>";
                    }
                    echo "</table>";


                
                
                    echo '<br><br><h3>Contenido de la variable $_ENV</h3><br>';
                    echo '<table>';
                    echo '<tr><th>Variable</th><th>Valor</th></tr>';
                    if (!empty($_ENV)) {
                        foreach ($_ENV as $variable => $resultado) {
                            echo "<tr>";
                            echo '<td>$_ENV[' . $variable . ']</td>';
                            echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>La variable \$_ENV está vacía.</td></tr>";
                    }
                    echo "</table><br><br>";
        
        ?>
        
    </main>
</body>
</html>