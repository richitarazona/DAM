<?php
// Clase
class MiClase2 {

    static $pi = 3.14156;

    static function longitud_circunferencia($diametro) {
        return MiClase2::$pi * $diametro;
    }

}

// El método estático se usa sin crear la instancia de la clase
// sintaxis clase::método()
include 'vistas/cabecera.php';
echo "Acceso una propiedad/variable estática y a un método estático <br />";
echo"Longitud de la circunferencia (sin instancia): " . MiClase2::longitud_circunferencia(44.5) . "<br />";

$obj = new MiClase2;
// En este caso utilizamos método estático pero
// creando un objeto de la clase
// atención: cambia la sintaxis obj->método()
echo "valor de pi= " . MiClase2::$pi. "<br />";
echo "Longitud de la circunferencia (con instancia) : " .
 $obj->longitud_circunferencia(44.5);
include 'vistas/pie.php';
?>