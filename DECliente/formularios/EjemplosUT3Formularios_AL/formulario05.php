<?php
  
    include "cabecera.php";
?>
    <form id='form' action="ejemplo05.php" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre" value = "pepe" />

        <label>Edad</label>
        <input type="text" name="edad" />

        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
