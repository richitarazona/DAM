<?php

// Definición de la clase Factura
class Factura {

    // Número de la factura
    private $numero;
    private $fecha;
    // matriz de objetos lineas de detalle (Linea_Detalle)
    private $lineas;

    function __construct($var_numero, $var_fecha) {
        $this->numero = $var_numero;
        $this->fecha = $var_fecha;
    }

    function getNumero() {
        return $this->numero;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getLineas() {
        return $this->lineas;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function agregar_linea($linea_detalle) {
        if ($linea_detalle instanceof Linea_Detalle) {
            $this->lineas[] = $linea_detalle;
        } else {
            
        }
    }

}

// Definición de la clase Linea_Detalle

class Linea_Detalle {

    // Una propiedad publica
    private $cantidad;
    private $producto;

    function __construct($var_cantidad, $var_producto) {
        // constructor de la clase Linea_Detalle
        $this->cantidad = $var_cantidad;
        $this->producto = $var_producto;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getProducto() {
        return $this->producto;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

}
