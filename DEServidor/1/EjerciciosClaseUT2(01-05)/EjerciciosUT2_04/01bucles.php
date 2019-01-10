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
            <h2>Lista de viñetas con for</h2>
            <ul>
                <?php
                for ($i=1; $i < 11; $i++) { 
                    echo "<li>Iteracion $i</li>";
                }
                ?>
            </ul>
            <h2>Lista de viñetas con while</h2>
            <ol>
                <?php
                $a = 1;
                while ($a <= 10) {
                    echo "<li>Iteracion $a</li>";
                    $a++;
                }               
                ?>
            </ol>  
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>