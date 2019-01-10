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
            <h2>Generando tabla de multiplicacion de un nº</h2>   
            <table>
                <?php
                $numero = 4;
                echo "Tabla de multiplicar del $numero <br>";
                
                
                    for ($i=1; $i < 11; $i++) { 
                        echo "<tr><td>$numero * $i</td><td>" .$numero * $i . "</td></tr>";                        
                    }
                    
                
                
                
                ?>
            </table> 
                
            
        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>