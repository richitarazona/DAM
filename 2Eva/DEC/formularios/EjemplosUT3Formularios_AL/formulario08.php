<?php 
    include "cabecera.php";
?>
    <form id='form' action="ejemplo08.php" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre"  /><br />
        <p>Qué edad tienes?</p><br />
        <input type="radio" name="edad" value="uno" checked="checked"/>Entre 1 y 18<br />
        <input type="radio" name="edad" value="dos"  />Entre 18 y 65<br />
         <input type="radio" name="edad" value="tres"  />Mayor de 65<br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
