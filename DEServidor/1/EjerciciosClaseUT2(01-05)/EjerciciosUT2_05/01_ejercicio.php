<?php

      function saludar(){
            return "hola, esto es un saludo sin parámetros <br>";
      }

      function saludarPersonalizado($nombre){
            return "Hola $nombre Cómo estás?";
      }

      $resultado = "Primer saludo <br>";
      $resultado .= saludar();
      $resultado .= "Segundo saludo <br>";
      $resultado .= saludarPersonalizado("Luis");
      $resultado .= "<hr>";


      for ($i=1; $i < 8; $i++) { 
            $resultado .= "Saludo $i: " . saludar();
      }
      
      include "includes/resultado.php";
?>
