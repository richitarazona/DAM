<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros Ejercicios PHP</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Segundo ejemplo PHP</h2></div>
            <div id="principal">
            <h3>Variables y tipos de datos- Constantes</h3>
            <hr>
            <h3>Datos de un alumno</h3>
                <?php
                define("Convenio", "CI Mª Ana Sanz");
                define("Horas", 7);
                $nombre = "Maria";
                $edad = 23;
                $altura = 1.78;
                $modulo = "Desarrollo de entornos en servidor";
                $pendiente = "False"; 

                echo "<p>Instituto:" . Convenio . "</p>\n";
                echo "<p>Nombre: $nombre</p>\n";
                echo "<p>edad: $edad</p>\n";
                echo "<p>Altura: $altura</p>\n";
                echo "<p>Modulo: $modulo</p>\n";
                echo "<p>Horas: " . Horas . "</p>\n";
                echo "<p>¿Tienes algo pendiente? $pendiente</p>\n"
                ?>
                    
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
