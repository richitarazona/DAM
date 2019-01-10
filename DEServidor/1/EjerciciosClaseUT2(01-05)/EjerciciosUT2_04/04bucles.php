<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Ejemplos con PHP- Sentencias repetitivas</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
            <h2>Tabla de una fila</h2>    
                <?php
                for ($i=1; $i < 11; $i++) { 
                    echo "<a href='#'>Enlace $i</a><br>";
                   
                }
                ?>
            
        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>