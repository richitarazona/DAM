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
                  $numero = 25;
                  $numeroRnd = rand(1,100);
                  echo "El número es: $numero <br>";
                  if ($numeroRnd > $numero) {
                        echo "El número $numeroRnd es más alto que el $numero <br>";
                  } elseif ($numeroRnd < $numero) {
                        echo "El número $numeroRnd es más pequeño que el $numero <br>";
                  }else{
                        echo "Enorabuena has acertado, el número es el $numero <br>";
                  }                  
            ?>            
            <a href="script03if.php">Pulsa para recargar la página</a>
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
</body>
</html>