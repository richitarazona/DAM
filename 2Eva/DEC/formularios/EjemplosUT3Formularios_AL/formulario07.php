<?php

    include "cabecera.php";
?>
    <form id='form' action="ejemplo07.php" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre"  /><br />
        <label>Password</label>
        <input type="password" name="password"  /><br />
        
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        <input type="hidden" name="enviado" value="si" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
