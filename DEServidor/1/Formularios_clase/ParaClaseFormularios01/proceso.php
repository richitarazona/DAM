<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css" />

    <title>Document</title>
</head>
<body>
    

   <?php
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";         

    $resultado = "";
    $resultado .= " Ha introducio los siguientes datos:"."<br>";
    $resultado .=  "Nombre: " . $_POST['usuario']."<br>";
    $resultado .= "Password: " . $_POST['clave']."<br>";
    $sexo = $_POST['sexo'];
    switch ($sexo) {
        case $sex = "Hombre";
            
            break;
            case $sex = "mujer";
            
            break;
    }
    $resultado.= "Sexo: $sex.<br>";
    $resultado.= "Edad:". $_POST['edad']."<br>";
    $resultado .= "Tus gustos:";
    if(isset($_POST['vivienda'])){
        $resultado .= $_POST['vivienda']."*";
        }    if(isset($_POST['trabaja'])){
        $resultado .= $_POST['trabaja']."*";
        }     if(isset($_POST['mus'])){
        $resultado .= $_POST['mus']."*";
        }
       
  echo($resultado);
 ?>
</body>
</html>