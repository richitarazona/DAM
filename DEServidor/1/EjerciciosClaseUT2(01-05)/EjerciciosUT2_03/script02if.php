<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Ejemplo con If / switch</title>
</head>
<body>
<div id="contenido">
            <div id="cabecera"><h2>Ejemplo con If / switch</h2></div>
            <div id="principal">            
            <?php  
                  $nombre = "Ricardo";
                  $hora = date("H");
                  switch ($hora) {
                        case $hora > 5 && $hora <= 7:
                              echo "¿$nombre no es un poco pronto para estar despierto?";
                              break;
                        case $hora > 7 && $hora <= 14:
                              echo "Buenos dias $nombre";
                              break;
                        case $hora > 14 && $hora <= 16:
                              echo "Que aproveche la comida $nombre";
                              break;
                        case $hora > 16 && $hora <= 22:
                              echo "Que tengas buena tarde $nombre";
                              break;
                        case $hora > 22 && $hora <= 5:
                              echo "Buenas noches $nombre";
                              break;
                        default:
                              echo "Esta hora no es válida $nombre";
                              break;
                  }
            ?>            
            
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
</body>
</html>