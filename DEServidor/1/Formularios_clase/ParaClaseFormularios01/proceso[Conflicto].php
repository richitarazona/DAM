 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <title>Formulario datos personales</title>
    </head>
    <body>
        <div id="contenido">
        <?php
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>"; 
        ?>
    <?php
      echo " Ha introducio los siguientes datos:<br/";
      echo "Nombre: ".$nombre = $_POST['usuario'];
      echo "Password: ".$clave = $_POST['clave'];
      $sexo = $_POST['sexo'];
      switch ($sexo) {
          case 'hombre':$sex ="Hombre";
              
              break;
              case 'mujer':$sex ="mujer";
              
              break;
      }
      echo "Sexo: $sex";
    
    ?>
  

        </div>
    </body>
</html>
