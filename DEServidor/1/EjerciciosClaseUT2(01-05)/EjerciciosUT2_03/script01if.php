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
            $nota = 9;
            $nombre = "Mikel";
              switch ($nota) {
                case 0 && 4.9:
                      echo "$nombre ha obtenido un suspenso";
                      break;
                case 5:
                      echo "$nombre ha aprobado apurando";
                      break;
                case 6:
                      echo "Bien";
                      break;
                case $nota > 6 && $nota <8:
                      echo "$nombre ha obtenido un notable";
                      break;

                case $nota > 8 && $nota <10:
                      echo "$nombre ha obtenido un Sobresaliente";
                      break;
                  default:
                      echo "Esa nota no existe";
                      break;
              }
            ?>            
            
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
</body>
</html>