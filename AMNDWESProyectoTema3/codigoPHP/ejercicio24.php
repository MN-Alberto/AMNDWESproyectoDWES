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
        table{
            border-collapse: collapse;
            border-width: 4px;
            margin: 0 auto;
        }
        
        td{
            padding: 10px;
            border-width: 4px;
        }
        input{
            border-radius: 15px;
        }
        
        #formulario{
            margin: 0 auto;
            border-style:solid;
            border-color: black;
            border-width: 1px;
            width: 600px;
            border-radius: 25px;
            background-color: linen;
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
        
    </style>
</head>
<body>
    <header>
        <h1><b>UT3: CARACTERÍSTICAS DEL LENGUAJE PHP</b></h1>
        <a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>Ejercicio 24</b></h2>
        <div id="formulario">
       <h3>Formulario de datos personales:</h3>
       
                            <?php
                    /*
                     * Autor: Alberto Méndez Núñez
                     * Fecha de ultima modificación: 24/10/2025
                     *24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                            recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
                            respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
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
                            
                
                // comprobación de si el usuario ha pulsado el botón de enviar.  
               if(isset($_REQUEST['submit'])){
                   
                  // inicialización de las variables $nombre y $edad con la información introducida en el formulario.
                      $nombre= $_REQUEST['nombre'] ?? '';
                      $edad= $_REQUEST['edad'] ?? '';
                   
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
                            echo "<h3>Datos introducidos:</h3>";
                                echo $aRespuesta["nombre"]."<br>";
                                echo $aRespuesta["edad"]."<br>";
                                echo "<br>";
                }                  
            
                //Si la entrada no es la correcta vuelve a mostrar el formulario de nuevo.
            else{
                
                ?>
            <form action=<?php echo $_SERVER["PHP_SELF"];?> method="post">
                <table>
                    <tr>
                        <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombre" style="background-color: lightgoldenrodyellow" 
                           value="<?php echo (empty($aErrores['nombre'])) ? ($_REQUEST['nombre'] ?? '') : ''; ?>"/></td>
                <!-- 
                   si da error lo mostamos al lado de su campo.
                -->
                <td><span style="color:red;"><?= $aErrores["nombre"] ?></span></td>
                </tr>
                <tr>
                    <td><label for="edad">Edad:</label></td>
                    <td><input type="number" name="edad" id="edad" style="background-color: lightgoldenrodyellow"
                               value="<?php echo (empty($aErrores['edad'])) ? ($_REQUEST['edad'] ?? '') : ''; ?>"/></td>
                <!--
                   si da error lo mostamos al lado de su campo.
                -->
                <td><span style="color:red;"><?= $aErrores["edad"] ?></span></td>
                </tr>
                
                <tr>
                    <td colspan="3"><input id="boton" type="submit" name="submit" value="Enviar"><td>
                </tr>
                </table>
            </form>
       </div>
        
        <?php
        
            //Cerramos el else.
            }
                    ?>
        
    </main>
</body>
</html>