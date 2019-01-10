<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros Ejercicios PHP</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
                <?php
                echo "<p>Hola! este es mi primer ejemplo en PHP</p>\n";
                echo "<hr />\n";
                echo "<p>PHP es un lenguaje de script de servidor</p>\n";
                echo "<p>Con la sentencia <span class='sentencia'>echo</span> mostramos información en el navegador</p>\n";
                echo "<p>Si utilizo \\n puedo insertar \n saltos de línea en el código fuente del navegador</p>\n";
                echo "<p>pero solo funciona con las comillas dobles, no con las simples </p>\n";
                echo "22 es un número\n"
                ?>
                <h3>Ahora practicaremos con print</h3>
                <?php
                print "Hola este es mi primer ejemplo con <span class='sentencia'>print</span> <br />\n";
                print 'Las comillas simples también funcionan con <span class="sentencia">print</span>'
                ?>     
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
