<?php
     
    include "cabecera.php";
?>
    <form id='form' action="ejemplo06.php" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre"  /><br />
        
        <label>Comentarios</label>
        <textarea name="texto" rows="6" cols="25">

        </textarea><br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
