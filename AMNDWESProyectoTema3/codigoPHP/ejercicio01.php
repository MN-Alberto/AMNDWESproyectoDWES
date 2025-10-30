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
        <h1><b>UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</b></h1>
        <a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 01</b></h2>
        
        <?php
        /*
         * Autor: Alberto Méndez Núñez
         * Fecha de ultima modificación: 09/10/2025
         * 
         */
        
        
            $string="Ejemplo string";
            $int=12;
            $float=12.45;
            $boolean=true;
            
            echo 'Salida por pantalla con "echo": <br><br>';
            echo "La variable con valor '$string' es de tipo ". gettype($string)." y se llama: ".'$string'."<br>";
            echo "La variable con valor '$int' es de tipo ". gettype($int)." y se llama: ".'$int'."<br>";
            echo "La variable con valor '$float' es de tipo ". gettype($float)." y se llama: ".'$float'."<br>";
            echo "La variable con valor '$boolean' es de tipo ". gettype($boolean)." y se llama: ".'$boolean'."<br><br><br><br>";
            
            echo 'Salida por pantalla con "print": <br><br>';
            print "La variable con valor '$string' es de tipo ". gettype($string)." y se llama: ".'$string'."<br>";
            print "La variable con valor '$int' es de tipo ". gettype($int)." y se llama: ".'$int'."<br>";
            print "La variable con valor '$float' es de tipo ". gettype($float)." y se llama: ".'$float'."<br>";
            print "La variable con valor '$boolean' es de tipo ". gettype($boolean)." y se llama: ".'$boolean'."<br><br><br><br>";
            
            echo 'Salida por pantalla con "printf": <br><br>';
            printf("La variable con valor '$string' es de tipo ". gettype($string)." y se llama: ".'$string'."<br>");
            printf("La variable con valor '$int' es de tipo ". gettype($int)." y se llama: ".'$int'."<br>");
            printf("La variable con valor '$float' es de tipo ". gettype($float)." y se llama: ".'$float'."<br>");
            printf("La variable con valor '$boolean' es de tipo ". gettype($boolean)." y se llama: ".'$boolean'."<br><br><br><br>");
            
            echo 'Salida por pantalla con "print_r": <br><br>';
            print_r("La variable con valor '$string' es de tipo ". gettype($string)."y se llama: ".'$string'."<br>");
            print_r("La variable con valor '$int' es de tipo ". gettype($int)."y se llama: ".'$int'."<br>");
            print_r("La variable con valor '$float' es de tipo ". gettype($float)."y se llama: ".'$float'."<br>");
            print_r("La variable con valor '$boolean' es de tipo ". gettype($boolean)."y se llama: ".'$boolean'."<br><br><br><br>");
            
            echo 'Salida por pantalla con "var_dump": <br><br>';
            var_dump("La variable con valor '$string' es de tipo ". gettype($string)." y se llama: ".'$string'."<br>");
            var_dump("La variable con valor '$int' es de tipo ". gettype($int)." y se llama: ".'$int'."<br>");
            var_dump("La variable con valor '$float' es de tipo ". gettype($float)." y se llama: ".'$float'."<br>");
            var_dump("La variable con valor '$boolean' es de tipo ". gettype($boolean)." y se llama: ".'$boolean'."<br><br><br><br>");
        ?>
        
    </main>
</body>
</html>