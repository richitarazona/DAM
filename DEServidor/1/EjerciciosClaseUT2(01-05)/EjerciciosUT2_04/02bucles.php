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
            <h2>Simulando notas de una clase y contando los aprobados</h2>            
                <?php
                $TotalAprobados = 0;
                for ($i=1; $i < 25; $i++) { 
                    $numRnd = rand(0,10);
                    if ($numRnd >= 5) {
                        $TotalAprobados += 1;
                    }
                }
                echo "Total aprobados $TotalAprobados";
                ?>
                       
        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>