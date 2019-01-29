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
    echo "Ha introducio los siguientes datos:<br>";
    echo "Nombre: ".$nombre = $_POST['usuario']."<br>";
    echo "Password: ".$clave = $_POST['clave']."<br>";
    //Recorremos un checkbox y obtnemos el value
   $sexo = $_POST['sexo'];
        switch ($sexo) {
            case 'hombre': $sex ="Hombre";
                break;
            case 'mujer': $sex ="mujer";
                break;
                        } 
        echo "Sexo: $sex <br>";


  /*   if(isset()$_POST['sexo']){
        $sexo ="No ha seleccionado ninguna opcion";
    }else{ 
        $sexo = "Sexo:"." ";
        $sexo .= $_POST['sexo'];
        echo $sexo;
    }  */
   
    

    $comentarios = $_POST['comentarios'];
    echo "Sus comentarios son $comentarios <br>";
        //Checkbox con mutiples opciones
    $resultado = "Tus datos son :";
        if(isset($_POST['vivienda'])){
        $resultado .= $_POST['vivienda']."*";
        }if(isset($_POST['trabaja'])){
        $resultado .= $_POST['trabaja']."*";
        }if(isset($_POST['mus'])){
    $resultado .= $_POST['mus']."*";}
    echo $resultado."<br>";

    //Para casillas de verificacion 
    /* $resultado_pais = "";
    $paises = $_POST['pais'];
        foreach ($paises as $pais) {
        $resultado_pais .= $pais;}
    echo "Tus paises: $resultado_pais" ; */
    $pais = $_POST['pais'];
    $resultado_pais = "Eres de natural de : $pais";
    echo "$resultado_pais"."<br>";
    //¿Funcionaria esto?
    //$resultado_pais1 ="Eres de : {$_POST['pais']}";

    

    $resultado = "";
    $colores = $_POST['colores'];
    foreach ($colores as $color) {
        $resultado .= $color." ";}
    echo "Tus colores: $resultado"."<br>" 
     
 ?>
  
  

        </div>
    </body>

