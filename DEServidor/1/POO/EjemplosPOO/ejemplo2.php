<?php
// clase simple para crear una tabla HTML 
Class MiTablaHTML {
    private $texto;
    
    function __construct($var) {
        $this->texto = $var;
    }

    public function imprimir(){
        print("<table border='3'><tr><td>");
        print($this->texto);
        print("</td></tr></table>");
    }
}
include 'vistas/cabecera.php';
// crea una instancia del objeto
$obj = new MiTablaHTML("texto para colocar en la tabla");
// uso de un método 
$obj->imprimir();

//lo mismo
$obj= new MiTablaHTML("El texto de la tabla");
$obj->imprimir();


include 'vistas/pie.php';
?>