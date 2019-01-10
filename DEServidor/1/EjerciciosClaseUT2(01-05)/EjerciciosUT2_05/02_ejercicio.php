<?php

      function CalcularRenta($precioInicial, $precioFinal, $dividendos){
            $resultado = (($precioFinal - $precioInicial + $dividendos) / $precioInicial) * 100;
            return $resultado;
      }

      $precioInicial = rand(10000, 20000);
      $precioFinal = 17000;
      $dividendos = 500;

      $resultado = "<p>Precio Inicial: $precioInicial</p>";
      $resultado .= "<p>Precio Final: $precioFinal</p>";
      $resultado .= "<p>Dividendos: $dividendos</p>";
      $resultado .= "<p>Rentabilidad: " .number_format( CalcularRenta($precioInicial, $precioFinal, $dividendos), 2) . " %</p>";

      include "includes/resultado.php";
?>
