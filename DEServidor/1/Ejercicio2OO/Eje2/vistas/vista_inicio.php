<?php

   
    foreach ($personas as $persona)
    {
    echo "<div class='persona'>";
    echo "<p> " . htmlspecialchars(utf8_encode($persona['nombre'])) . " " .
    strtoupper(htmlspecialchars(utf8_encode($persona['apellido']))) . "</p>";
    echo "</div>\n";
    }
  
include "pie.php"
?>