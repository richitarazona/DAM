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
            <h3>Enlace a otro script PHP</h3>
            <hr>
            <p>Hora actual: <?php echo date('H:i:s')?></p>
            <p>Fecha actual: <?php echo date('d F Y')?></p>
            <a href="sexto.php">Mostrar dados aleatorios</a>
          
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
