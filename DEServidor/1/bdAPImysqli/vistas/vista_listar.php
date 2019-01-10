<?php 
include "cabecera.php"; 
echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Est. civil</th><th>Género</th></tr>"; 
foreach ($personas as $persona) {
     echo "<tr>"; echo "<td>".htmlspecialchars($persona['nombre'])."</td>"; 
     echo "<td>".htmlspecialchars($persona['apellido'])."</td>"; 
     echo "<td>{$persona['edad']}</td>"; 
     echo "<td>{$persona['eCivil']}</td>"; 
     echo "<td>{$persona['genero']}</td>"; echo "</tr>"; } 
     echo "</table>"; 
     
     //
 include "pie.php";
      ?>