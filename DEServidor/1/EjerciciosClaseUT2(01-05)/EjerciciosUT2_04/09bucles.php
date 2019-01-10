<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Ejemplos con PHP- Sentencias repetitivas</title>
        <style>
        
        </style>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
            <h2>Generando tabla de multiplicacion</h2>   
            <table>
                <?php
               
                $numero = 4;
                for ($j=1; $j < 11; $j++) { 
                    if ($i % 2 == 0) {
                    echo "<tr  class='blue'>";
                }
                   for ($i=1; $i < 11; $i++) {
                       
                          echo "<td>" .$j * $i . "</td>"; 
                        
                                               
                    }
                    echo "</tr>";
                }                    
                ?>
            </table> 
                
            
        </div>
        <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>