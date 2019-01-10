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
            <h3>Imágenes aleatorias</h3>
            <hr>
            <?php  
                $numeroRnd1 = rand(1,6);
                $numeroRnd2 = rand(1,6);
            ?>
            
            <img src="images/<?php echo $numeroRnd1;?>.gif" alt="">
            <img src="images/<?php echo $numeroRnd2;?>.gif" alt="">
            <br>
            <a href="octavo.php">Recargar</a>
          
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
