<?php
    include "cabecera.php";
        //utiliza la plantilla $resultado.php
        $nombre = $_POST['nombre'];
        $resultado = " $nombre tus aficiones son :";
            if(!isset($_POST['aficiones'])){
            echo " No has elegido ninguna opcion";
            }else{
                $aficiones = $_POST['aficiones'];
            $resultado = "Tus aficiones son: ";
            
            foreach ($aficiones as $aficion) {
                $resultado .= $aficion."*";

                # code...
            }
        
        }
    include 'resultado.php';
    include "pie.php";
?>
