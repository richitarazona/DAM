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
            <h2>Generando casillas de verificacion</h2>    
                <?php
                echo "<form action='' method='get'>"; 
                echo "<div>"; 
                for ($i=1; $i < 11; $i++) { 
                    echo '<label>Boton ' . $i . ': </label><button>Editar</button> <button>Borrar</button><br>';
                }
                echo "</div></form>";
                ?>
            
        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>