<?php

class Prueba {

    public $prop1 = "valor de propiedad 1";
    public $prop2 = "valor de propiedad 2";
    public $prop3 = "valor de propiedad 3";

}

include 'vistas/cabecera.php';
echo "Foreach con objetos <br /><br />";
$obj = new Prueba;
foreach ($obj as $nombre_prop => $valor_prop) {
    print "<b>Propiedad:</b>  " . $nombre_prop .
            "<b>    Valor:  </b>" . $valor_prop . "<br />";
}

include 'vistas/pie.php';
?>