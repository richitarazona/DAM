<?php
      $resultado = "";
      function pruebaPrede($a , $b = 6, $c = 3){
            return $a + $b + $c;
      }
      
      $var = 12;
      $var2 = 100;
      $var3 = 200;

      $resultado .= "<p>La suma con el parametro \$var = $var es " . pruebaPrede($var)  . "<p>";      
      $resultado .= "<p>La suma con el parametro \$var = $var y $var2 es " . pruebaPrede($var, $var2)  . "<p>";      
      $resultado .= "<p>La suma con el parametro \$var = $var $var2 y $var3 es " . pruebaPrede($var, $var2, $var3)  . "<p>";      

      include "includes/resultado.php";
?>
