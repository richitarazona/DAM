<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros Ejercicios PHP</title>
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera"><h2>Tercer ejemplo PHP</h2></div>
            <div id="principal">
            <h3>Variables y tipos de datos- Constantes</h3>
            <hr>
            <h3>Trabajando con variables</h3>
                <?php                
                $valor1 = 23;
                $valor2 = 80;
                $cantidadArticulos = 12;
                

                echo 'El valor de $valor1 es' . $valor1 . '<br>';
                echo 'El valor de $valor2 es' . $valor2 . '<br>';
                echo "La suma de $valor1 y $valor2 es " . ($valor1 + $valor2) . "<br>";
                echo "El producto de $valor1 y $valor2 es " . ($valor1 * $valor2) . "<br>";
                echo "El resto de $valor1 y $valor2 es " . ($valor1 * $valor2) . "<br>";
                echo "Hay actualmente $cantidadArticulos <br>";
                echo "Ahora hay " . ++$cantidadArticulos . "<br>";
                echo "Ahora hay " . --$cantidadArticulos . "<br>";
              ?>

               
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
