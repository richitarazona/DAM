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
            <h3>Mostrando una imagen</h3>
            <hr>
            <?php  
                $numeroRnd = rand(1,6);
            ?>
            
            <img src="images/<?php echo $numeroRnd;?>.gif" alt="">

               
               

            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
