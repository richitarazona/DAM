<?php
abstract class Vehiculo{
 
    protected $nafta = 100; //Comienza con 100 litros de nafta
 
    public function  getNafta(){
	return $this->nafta;
    }
    abstract function avanzar();
    
}
 
class Ferrari extends Vehiculo{
 
    public function avanzar(){
        $this->nafta -= 20;
    }
}
 
class Fiat extends Vehiculo{
 
    public function avanzar(){
        $this->nafta -= 8;
    }
}

//No hacefalta una clase ya que es static
class Prueba {
    
     static function  probar (Vehiculo $v)
     {
         $v->avanzar();
     }
 }
 
include 'vistas/cabecera.php';
$coche1=new Fiat();
$coche2=new Ferrari();

Prueba::probar($coche1);
Prueba::probar($coche2);

// llamar al mismo método 
echo "Al Fiat del usuario 1 le quedan " . $coche1->getNafta() . " litros de nafta<br/>";

echo "Al Ferrari del usuario 2 le quedan " . $coche2->getNafta() . " litros de nafta<br/>";



include 'vistas/pie.php';
?>
