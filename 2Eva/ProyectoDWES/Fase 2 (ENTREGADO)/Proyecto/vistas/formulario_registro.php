<?php
/**
 * @author	Equipo 1
 * @version	Jueves, 10 de Enero, 2019.
 */
    include 'cabecera.php';
   // include 'helper/Input.php';
?>
<?php
    if ($fase == 'error') {

        echo '<div class="errores">';
        echo "<h3> Soluciona los siguientes errores: </h3>";
        echo $errores;
        echo "</div>"  ;
    }
 ?>
<form id="form" action="index.php" method="post">
    <div id="datos">
    <fieldset> <legend>Regístrate</legend>
        <label>USUARIO</label>
        <input type="text" name="usuario" value="<?php echo Input::get('usuario')?>" /><br />
        <label>E-MAIL </label>
        <input type="email" name="email"  value="<?php echo Input::get('email')?>" /><br />
        <label>PASSWORD </label>
        <input type="password" name="contrasena"  value="<?php echo Input::get('contrasena')?>" ><br />
        <label>CONFIRMAR PASSWORD </label>
        <input type="password" name="confirmarpassword"  value="<?php echo Input::get('confirmarpassword')?>" /><br />
        <label for="">FECHA DE NACIMIENTO</label>
        <input type="date" name="fechaNacimiento"  value="<?php echo Input::get('fechaNacimiento')?>" >
        <hr>
        <label>NOMBRE </label>
        <input type="text" name="nombre"  value="<?php echo Input::get('nombre')?>" /><br >
        <label>CLASE </label><br>
        <input class="clase" id="clase" type="radio" name="clase" value="Mago" <?php echo Input::getRadio('clase', "Mago")?>> Mago<br>
        <input class="clase" id="clase" type="radio" name="clase" value="Guerrero" <?php echo Input::getRadio('clase', "Guerrero")?>> Guerrero<br>
        <input class="clase" id="clase" type="radio" name="clase" value="Curandero" <?php echo Input::getRadio('clase', "Curandero")?>> Curandero<br>
        <label for="">NIVEL</label>
        <select name="fuerza" id="fuerza" >
            <option value="0"  <?php echo Input::getOption('fuerza', 0)?> disabled> Elige Nivel</option>
            <option value="1" <?php echo Input::getOption('fuerza', 1)?>>1</option>
            <option value="2" <?php echo Input::getOption('fuerza', 2)?>>2</option>
            <option value="3" <?php echo Input::getOption('fuerza', 3)?>>3</option>
            <option value="4" <?php echo Input::getOption('fuerza', 4)?>>4</option>
        </select>
        <label>&nbsp;</label>
        <input class="boton" type="submit" name="enviar" value="ENVIAR">
        <input class="boton" type="reset" value="CANCELAR">
    </fieldset>
    </div>
</form>

<?php
    if ($fase == 'resul') {
        echo "<h2> Datos introducidos: </h2>";
        echo '<div class="resultado">';
        echo $resultado;
        echo "</div>"  ;
    }
    include 'pie.php';
?>