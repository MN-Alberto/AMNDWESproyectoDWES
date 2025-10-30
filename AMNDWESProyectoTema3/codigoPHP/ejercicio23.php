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
        <h2><b>Ejercicio 23</b></h2>
       
                            <?php
                    /*
                     * Autor: Alberto Méndez Núñez
                     * Fecha de ultima modificación: 17/10/2025
                     *23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
                     */

                            // array que va a almacenar los errores al introducir valores en los campos.
                            $aErrores=[
                                "nombre" => "",
                                "edad" => ""
                            ];
                            
                            $entradaOK=true; // variable booleana para comprobar si la entrada de los campos es la correcta.
                            
                            // array que va a almacenar las respuestas correctas de los campos para mostrarlas por pantalla.
                            $aRespuesta=[
                              "nombre" => "",
                              "edad" => ""
                            ];
                            
                            // inicialización de las variables $nombre y $edad con la información introducida en el formulario.
                            $nombre= $_REQUEST['nombre'] ?? '';
                            $edad= $_REQUEST['edad'] ?? '';
                
                // comprobación de si el usuario ha pulsado el botón de enviar.  
               if(isset($_REQUEST['submit'])){
                   
                // comprobación de que la variable $nombre tiene un valor valido (no está vacio y no es un número).
                if(trim($nombre)==='' || is_numeric($nombre)){
                    // si no tiene valor o es incorrecto añadimos un mensaje de error a $aErrores y cambiamos $entradaOK a false.
                    $aErrores["nombre"]="El campo nombre no puede estar vacio ni ser un número.";
                    $entradaOK=false;
                }
                
                // comprobación de que la variable $edad tiene un valor numerico mayor que 0 y menor que 100.
                if($edad==='' || !is_numeric($edad) || $edad<0 || $edad>100){
                    // si no añadimos un mensaje de error a $aErrores y cambiamos $entradaOK a false.
                    $aErrores["edad"]="El campo edad no puede estar vacio, y debe ser un número entre 0 y 100.";
                    $entradaOK=false;
                }
               }
               else{
                   // el formulario no se ha rellenado nunca
                   $entradaOK=false;
               }
                         
                
                if($entradaOK){
                    // Si el formato de entrada de los datos es correcto añadimos las respuestas a un array para devolverlas.
                    $aRespuesta["nombre"]=$nombre;
                    $aRespuesta["edad"]=$edad;
                    
                    //Mostramos el array con cada respuesta por pantalla.
                            echo "<br><br>";
                            echo "<h3>Datos introducidos:</h3>";
                                echo $aRespuesta["nombre"]."<br>";
                                echo $aRespuesta["edad"]."<br>";
                }                  
            
                //Si la entrada no es la correcta vuelve a mostrar el formulario de nuevo.
            else{
                
                ?>
        
            <form method="post" action="">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" style="background-color: lightgoldenrodyellow"/>
                <!-- 
                   si da error lo mostamos al lado de su campo.
                -->
                <span><?= $aErrores["nombre"] ?></span>
                <br>
                <br>
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" style="background-color: lightgoldenrodyellow"/>
                <!-- 
                   si da error lo mostamos al lado de su campo.
                -->
                <span><?= $aErrores["edad"] ?></span>
                <br>
                <br>
                <input type="submit" name="submit" value="Enviar">
            </form>
        
        <?php
        //Cerramos el else.
            }
        ?>
        
    </main>
</body>
</html>