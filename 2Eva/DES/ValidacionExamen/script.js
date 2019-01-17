function accion(){

    var modelo = document.getElementById("moviles").value;
    var pulgadas = document.getElementById("pulgadas").value;
    var accesorios = "";
    for (let i = 0; i < miform.tarifa.length; i++) {
        if (miform.accesorios[i].selected){
        accesorios += miform.accesorios[i];}   
    }
    //var tarifa = document.getElementById("tarifa").value;
    //var operador = document.getElementById("operador").value;
    
}