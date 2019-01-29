var gasto1t = 0;
    var gasto2t = 0;
    var gasto3t = 0;
    var gasto4t = 0;

function calculaGasto(){

    var trimestre = document.miform.trimestre.value;
    var gasto = document.miform.Tt
    switch (trimestre) {
        case "1T":
        gasto1t += trimestre;
            break;
        case "2T":
        gasto2t += trimestre;
            break;
        case "3T":
        gasto3t += trimestre;
            break;
        case "4T":
        gasto4t += trimestre;
            break;
    }//swicht
}//function

function sumarGasto(){
    gasto1t = 200;
    var gastoTotal = (gasto1t +
    gasto2t + gasto3t + gasto4t)/4;
        
    document.getElementById("mensaje").innerHTML="1 Trimestre: " + gasto1t;
    document.getElementById("total").innerHTML="Gasto total: " + gastoTotal;

}