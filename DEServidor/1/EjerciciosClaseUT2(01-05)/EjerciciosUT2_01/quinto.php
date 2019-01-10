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
            
                <?php                
                $precioProducto = 234.89;
                define("IVA", 21);
                define("DESCUENTO", 25);
                ?>

               
               <table>                           
                <tr>
                    <td>Precio producto:</td>
                    <td><?php echo $precioProducto?></td>
                </tr>
                <tr>
                    <td>Descuento del 25%</td>
                    <td><?php echo $descuento = ($precioProducto * DESCUENTO) / 100?></td>
                </tr>
                <tr>
                    <td>Precio con descuento</td>
                    <td><?php echo $precioProducto - ($precioProducto * DESCUENTO) / 100?></td>
                </tr>
                <tr>
                    <td>IVA 21%</td>
                    <td><?php echo $iva = ($precioProducto * 21) / 100?></td>
                </tr>
                <tr>
                    <td>Precio final</td>
                    <td><?php echo ($precioProducto - $descuento) + $iva?></td>
                </tr>
                
                
            </table>

            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
