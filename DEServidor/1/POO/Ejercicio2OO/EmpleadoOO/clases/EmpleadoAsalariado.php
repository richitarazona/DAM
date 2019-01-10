 <?php
 class EmpleadoAsalariado extends Empleado {

private $horasTrabajadas;
private $precioHoras;

function __construct($primerNombre,$apellido,$numeroSeguridadSocial,$_horasTrabajadas,$_precioHoras){
    $this->horasTRabajadas=$_horasTrabajadas;
    $this->precioHoras=$_precioHoras;
    parent::__construct($primerNombre,$apellido,$numeroSeguridadSocial); }

function getHorasTrabajadas(){
    return $this->horasTrabajadas;}
function getPrecioHoras(){
    return $this->precioHoras; }
function setHorasTrabajadas($_horasTrabajadas){
    $this->horasTrabajadas=$_horasTrabajadas;}
function setPrecioHoras($_precioHoras){
    $this->precioHoras=$_precioHoras;}

    //Como añado los parametros de empleado???
    function mostrar(){
        
          echo  "Horas Trabajadas: " . ($this->horasTrabajadas)."<br>".
        "PrecioHoras: " . ($this->precioHoras)."<br>";}
    
    

   function ingresos(){
        $ingresos = $this->horasTrabajadas * $this->precioHoras();
        return "Los ingresos son de : " . $ingresos;
    }

 }
        ?> 