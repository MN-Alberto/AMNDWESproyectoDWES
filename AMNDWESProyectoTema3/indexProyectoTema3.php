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
        <h1><b>Índice Proyecto Tema 3</b></h1>
	<h3><a href="../../AMNDWESProyectoDWES/indexProyectoDWES.php">Alberto Méndez Núñez | 03/10/2025</a></h3>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <main>
        <h2><b>CONTENIDO</b></h2>
        <table border solid black 2px>
            <tr id="encabezado">
                <td>NÚMERO EJERCICIO</td>
                <td>ENUNCIADO</td>
                <td>EJECUTAR CÓDIGO</td>
                <td>MOSTRAR CÓDIGO</td>
            </tr>
            
             <tr>
                <td>Ejercicio00</td>
                <td>0. Hola mundo y phpinfo().</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio00.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio00.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio01</td>
                <td>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
                    var_dump).</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio01.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio01.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio02</td>
                <td>2. Inicializar y mostrar una variable heredoc.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio02.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio02.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio03</td>
                <td>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio03.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio03.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio04</td>
                <td>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio04.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio04.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio05</td>
                <td>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio05.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio05.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio06</td>
                <td>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio06.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio06.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio07</td>
                <td>7. Mostrar el nombre del fichero que se está ejecutando.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio07.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio07.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio08</td>
                <td>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio08.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio08.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio09</td>
                <td>9. Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio09.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio09.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio10</td>
                <td>10. Mostrar el contenido del fichero que se está ejecutando.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio10.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio10.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio12</td>
                <td>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio12.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio12.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio14</td>
                <td>14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio14.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio14.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio15</td>
                <td>15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio15.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio15.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio16</td>
                <td>16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio16.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio16.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio17</td>
                <td>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
                    asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
                    distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
                </td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio17.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio17.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio18</td>
                <td>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio18.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio18.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio20</td>
                <td>20. Convertir la LibreriaValidacionFormularios.php en una clase ValidacionFormularios.php. El profesor facilitará a los alumnos la clase
                    AAMMDDValidacionFormularios.php desarrollada en el curso anterior como punto de partida.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio20.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio20.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio21</td>
                <td>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
                    las preguntas y las respuestas recogidas.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio21.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio21.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio22</td>
                <td>22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                    recogidas.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio22.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio22.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio23</td>
                <td>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                    recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.</td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio23.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio23.php">Ver código</a></td>
            </tr>
            
            <tr>
                <td>Ejercicio24</td>
                <td>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                    recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
                    respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
                </td>
                <td class="codigos"><a href="/AMNDWESProyectoTema3/codigoPHP/ejercicio24.php">Ejecutar</a></td>
                <td class="mostrar"><a href="/AMNDWESProyectoTema3/mostrarcodigo/muestraEjercicio24.php">Ver código</a></td>
            </tr>
        </table>
    </main>
</body>
</html>

