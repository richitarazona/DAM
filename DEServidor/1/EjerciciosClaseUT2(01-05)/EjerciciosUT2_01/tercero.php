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
            <h3>Datos de un alumno</h3>

            <p>Datos de un alumno</p>
            
                <?php                
                $nombre = "Maria";
                $edad = 23;
                $altura = 1.78;
                $modulo = "Desarrollo de entornos en servidor";
                $pendiente = "False"; 
                ?>

                <table>                           
                <tr>
                    <td>Nombre</td>
                    <td><?php echo $nombre?></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><?php echo $edad?></td>
                </tr>
                <tr>
                    <td>Altura</td>
                    <td><?php echo $altura?></td>
                </tr>
                <tr>
                    <td>Módulo</td>
                    <td><?php echo $modulo?></td>
                </tr>
                <tr>
                    <td>¿Tiene algo pendiente?</td>
                    <td><?php echo ($pendiente) ? 1 : 0 ;?></td>
                </tr>
                
                
            </table>
                    
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
